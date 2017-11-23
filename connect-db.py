"""
    This is a script that contains the following:
    1. connect to db
    2. table creation
    3. drop table
    4. insert into table
    5. select * from table
    Created by Johnson Kan, Jared McDonald & Geoff Emmett
    On: October 15, 2016 
"""
import psycopg2
import os

def main():
    conn = psycopg2.connect(
        database="{db}".format(db=os.environ['herokudb']),
        user="{user}".format(user=os.environ['herokuuser']),
        password="{pw}".format(pw=os.environ['herokupw']),
        host="{host}".format(host=os.environ['herokuhost']),
        port="{port}".format(port=os.environ['herokuport'])
    )
    insert_sql = """
    INSERT INTO ta_forms (NAME,APP_DATE,APP_DETAIL) 
    VALUES ('Johnson Kan', '2016-10-15', '{"course" : "MSCI121", "instructor" :"Dr.Smucker"}');
    INSERT INTO ta_forms (NAME,APP_DATE,APP_DETAIL) 
    VALUES ('Geoff ', '2016-10-16', '{"course" : "MSCI334", "instructor" :"Dr.Gatma"}');
    INSERT INTO ta_forms (NAME,APP_DATE,APP_DETAIL) 
    VALUES ('Jared Wayne', '2016-10-17', '{"course" : "MSCI446", "instructor" :"Dr.GOLAB"}');
    """
    cursor = conn.cursor()
    drop_table(cursor)
    create_table(cursor)
    insert(cursor, insert_sql)
    res = select_all(cursor)
    for i in res:
        print res
    conn.commit()
    conn.close()

def create_table(cursor):
    create_sql = """
        CREATE TABLE TA_FORMS(
        ID serial PRIMARY KEY NOT NULL,
        NAME TEXT NOT NULL,
        APP_DATE DATE NOT NULL,
        APP_DETAIL TEXT NOT NULL
    );"""
    cursor.execute(create_sql)

def drop_table(cursor):
    drop_sql="""DROP TABLE TA_FORMS;"""
    cursor.execute(drop_sql)

def insert(cursor, insert_sql):
    cursor.execute(insert_sql)    

def select_all(cursor):
    select_sql ="""
    select * from ta_forms;
    """
    cursor.execute(select_sql)
    rows = cursor.fetchall()
    return rows

if __name__ == "__main__":
    main()
