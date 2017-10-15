create or replace procedure send_mail (p_mail_host in varchar2,p_from in varchar2,p_to in varchar2,p_subject in varchar2,p_message in varchar2)
as
   l_mail_conn   utl_smtp.connection;
begin
  l_mail_conn := utl_smtp.open_connection(p_mail_host, 25);
  utl_smtp.helo(l_mail_conn, p_mail_host);
  utl_smtp.mail(l_mail_conn, p_from);
  utl_smtp.rcpt(l_mail_conn, p_to);
  utl_smtp.open_data(l_mail_conn);
  utl_smtp.write_data(l_mail_conn, 'Date: ' || to_char(sysdate, 'DD-MON-YYYY HH24:MI:SS') || Chr(13));
  utl_smtp.write_data(l_mail_conn, 'From: ' || p_from || Chr(13));
  utl_smtp.write_data(l_mail_conn, 'Subject: ' || p_subject || Chr(13));
  utl_smtp.write_data(l_mail_conn, 'To: ' || p_to || Chr(13));
  utl_smtp.write_data(l_mail_conn, '' || Chr(13));
  utl_smtp.write_data(l_mail_conn, p_message || Chr(13));
  utl_smtp.close_data(l_mail_conn);
  utl_smtp.quit(l_mail_conn);
end;
/
create or replace procedure verificar_cumple as
begin
  FOR I IN (select TO_CHAR(FECHA_NACIMIENTO, 'MM/DD') fecha,TO_CHAR(SYSDATE, 'MM/DD') actual,email,descripcion t_email from persona inner join parametro on id_parametro = 5) LOOP
           IF (i.fecha = i.actual ) THEN
              send_mail(p_mail_host => 'smtp.gmail.com',p_from => 'cecilianogranados96@gmail.com',p_to => i.email, p_subject => 'BIRDLAND te desea un exelente dia.',p_message => i.t_email);
           END IF;
  END LOOP;
end;
/
BEGIN
  DBMS_SCHEDULER.create_job(
   job_name => 'Enviar_Email',
   job_type => 'PLSQL_BLOCK',
   job_action => 'begin verificar_cumple; end;',
   start_date => SYSTIMESTAMP,
   repeat_interval => 'FREQ=DAILY; BYHOUR=16;',
   end_date => NULL,
   enabled=> TRUE,
   comments => 'Envia correos si cumple anos, ');
END;









