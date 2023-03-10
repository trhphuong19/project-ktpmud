USE [quanlysinhvien]
GO
/****** Object:  Table [dbo].[Account]    Script Date: 2/25/2023 12:51:51 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Account](
	[ID] [int] IDENTITY(0,1) NOT NULL,
	[MSSV] [nvarchar](50) NOT NULL,
	[pass] [nvarchar](max) NULL,
	[FName] [nvarchar](50) NULL,
	[Mail] [nvarchar](max) NULL,
	[Sex] [nchar](10) NULL,
	[DOB] [date] NULL,
	[GPA] [float] NULL,
	[Addr] [nvarchar](max) NULL,
	[Malop] [nvarchar](50) NULL,
	[Trangthai] [nvarchar](max) NULL,
	[Sotin] [int] NULL,
 CONSTRAINT [PK_Account] PRIMARY KEY CLUSTERED 
(
	[MSSV] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Notify]    Script Date: 2/25/2023 12:51:51 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Notify](
	[ID] [int] IDENTITY(1,1) NOT NULL,
	[LName] [nvarchar](50) NULL,
	[Mess] [nvarchar](max) NULL,
	[Lop] [nvarchar](50) NULL,
	[DT] [nvarchar](50) NULL
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tblMaLop]    Script Date: 2/25/2023 12:51:51 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tblMaLop](
	[ID] [int] IDENTITY(1,1) NOT NULL,
	[MaLop] [nvarchar](50) NOT NULL,
 CONSTRAINT [PK_tblMaLop] PRIMARY KEY CLUSTERED 
(
	[MaLop] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[tblUser]    Script Date: 2/25/2023 12:51:51 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[tblUser](
	[ID] [int] IDENTITY(0,1) NOT NULL,
	[userName] [nvarchar](50) NULL,
	[pass] [nvarchar](50) NULL,
	[chucvu] [int] NULL
) ON [PRIMARY]
GO
SET IDENTITY_INSERT [dbo].[Account] ON 

INSERT [dbo].[Account] ([ID], [MSSV], [pass], [FName], [Mail], [Sex], [DOB], [GPA], [Addr], [Malop], [Trangthai], [Sotin]) VALUES (12, N'20201234', N'20201234', N'Trần Hoàng Bách', N'ccc', N'Nam       ', CAST(N'2001-01-30' AS Date), 3, N'', N'ET 01 K65', N'Khen thưởng', 75)
SET IDENTITY_INSERT [dbo].[Account] OFF
GO
SET IDENTITY_INSERT [dbo].[Notify] ON 

INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (9, N'covan2@daotao.cf', N'Ngày mai các em nghỉ', N'12345', N'24/02/23 20:14:07')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (10, N'covan2@daotao.cf', N'Ngày mai các em nghỉ', N'12345', N'24/02/23 20:14:42')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (11, N'20198127', N'vâng ạ', N'12345', N'24/02/23 20:40:59')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (12, N'20201234', N'dfd', N'12345', N'25/02/23 00:40:10')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (13, N'20201234', N'dfd', N'12345', N'25/02/23 00:40:15')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (14, N'20201234', N'dfd', N'12345', N'25/02/23 00:40:17')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (15, N'covan2@daotao.cf', N'sf', N'12345', N'25/02/23 00:42:07')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (16, N'20201234', N'sdf', N'', N'25/02/23 00:42:55')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (17, N'20201234', N'sdf', N'', N'25/02/23 00:42:55')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (18, N'20201234', N'sdf', N'', N'25/02/23 00:42:55')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (19, N'20201234', N'sdf', N'', N'25/02/23 00:42:56')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (20, N'20201234', N'sdf', N'', N'25/02/23 00:42:57')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (21, N'20201234', N'sdfsdf', N'', N'25/02/23 00:42:58')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (22, N'20201234', N'sdfsdf', N'', N'25/02/23 00:43:00')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (23, N'20201234', N'sdfsdf', N'', N'25/02/23 00:43:01')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (24, N'20201234', N'sdfsdf', N'', N'25/02/23 00:43:01')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (25, N'20201234', N'sdfsdf', N'', N'25/02/23 00:43:02')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (26, N'20201234', N'sdfsdf', N'', N'25/02/23 00:43:02')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (27, N'20201234', N'sdfsdf', N'', N'25/02/23 00:43:03')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (28, N'20201234', N'sdfsdf', N'', N'25/02/23 00:43:03')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (29, N'20201234', N'sdfsdf', N'', N'25/02/23 00:43:04')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (30, N'20201234', N'sdfsdf', N'', N'25/02/23 00:43:04')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (31, N'20201234', N'sdfsdf', N'', N'25/02/23 00:43:04')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (32, N'20201234', N'sdfsdf', N'', N'25/02/23 00:43:04')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (33, N'20201234', N'sdfsdf', N'', N'25/02/23 00:43:05')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (34, N'20201234', N'sdfsdf', N'', N'25/02/23 00:43:06')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (35, N'20201234', N'sdfsdf', N'', N'25/02/23 00:43:43')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (36, N'20201234', N'ád', N'ET 01 K65', N'25/02/23 00:47:40')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (37, N'20201234', N'ádád', N'ET 01 K65', N'25/02/23 00:47:41')
INSERT [dbo].[Notify] ([ID], [LName], [Mess], [Lop], [DT]) VALUES (38, N'20201234', N'ádád', N'ET 01 K65', N'25/02/23 00:47:42')
SET IDENTITY_INSERT [dbo].[Notify] OFF
GO
SET IDENTITY_INSERT [dbo].[tblMaLop] ON 

INSERT [dbo].[tblMaLop] ([ID], [MaLop]) VALUES (1, N'12345')
INSERT [dbo].[tblMaLop] ([ID], [MaLop]) VALUES (4, N'134566')
INSERT [dbo].[tblMaLop] ([ID], [MaLop]) VALUES (3, N'23456')
INSERT [dbo].[tblMaLop] ([ID], [MaLop]) VALUES (2, N'709812')
INSERT [dbo].[tblMaLop] ([ID], [MaLop]) VALUES (5, N'ET 01 K65')
SET IDENTITY_INSERT [dbo].[tblMaLop] OFF
GO
SET IDENTITY_INSERT [dbo].[tblUser] ON 

INSERT [dbo].[tblUser] ([ID], [userName], [pass], [chucvu]) VALUES (4, N'covan2@daotao.cf', N'covan2', 1)
INSERT [dbo].[tblUser] ([ID], [userName], [pass], [chucvu]) VALUES (9, N'20201234', N'20201234', 0)
SET IDENTITY_INSERT [dbo].[tblUser] OFF
GO
ALTER TABLE [dbo].[Account]  WITH CHECK ADD  CONSTRAINT [FK_Account_Account] FOREIGN KEY([MSSV])
REFERENCES [dbo].[Account] ([MSSV])
GO
ALTER TABLE [dbo].[Account] CHECK CONSTRAINT [FK_Account_Account]
GO
ALTER TABLE [dbo].[tblMaLop]  WITH CHECK ADD  CONSTRAINT [FK_tblMaLop_tblMaLop] FOREIGN KEY([MaLop])
REFERENCES [dbo].[tblMaLop] ([MaLop])
GO
ALTER TABLE [dbo].[tblMaLop] CHECK CONSTRAINT [FK_tblMaLop_tblMaLop]
GO
