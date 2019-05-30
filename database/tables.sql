CREATE table  IF NOT EXISTS Register (Firstname varchar(15) NOT NULL,
	Lastname varchar(15) NOT NULL,
	email varchar(20) NOT NULL,
	password varchar(16) NOT NULL,
	Address varchar(50) NOT NULL,
	contact BIGINT(10) NOT NULL,
	DOB date NOT NULL,
	BillNo int(10) NOT NULL,
	OrderNo int(10) NOT NULL,
	TableNo int(10) NOT NULL) ;

CREATE table  Bill (Bill No primary key int(7) NOT NULL,
				Details varchar(30) NOT NULL,
				Cost int (7) NOT NULL,
				ItemNo int(6) NOT NULL,
				Name varchar(30));	 	
	