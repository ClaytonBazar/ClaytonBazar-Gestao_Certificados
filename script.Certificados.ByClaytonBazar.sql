USE [master]
GO
/****** Object:  Database [certificados]    Script Date: 23/03/2024 17:51:42 ******/
CREATE DATABASE [certificados]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'certificados', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL16.MSSQLSERVER\MSSQL\DATA\certificados.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'certificados_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL16.MSSQLSERVER\MSSQL\DATA\certificados_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
 WITH CATALOG_COLLATION = DATABASE_DEFAULT, LEDGER = OFF
GO
ALTER DATABASE [certificados] SET COMPATIBILITY_LEVEL = 160
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [certificados].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [certificados] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [certificados] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [certificados] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [certificados] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [certificados] SET ARITHABORT OFF 
GO
ALTER DATABASE [certificados] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [certificados] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [certificados] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [certificados] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [certificados] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [certificados] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [certificados] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [certificados] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [certificados] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [certificados] SET  ENABLE_BROKER 
GO
ALTER DATABASE [certificados] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [certificados] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [certificados] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [certificados] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [certificados] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [certificados] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [certificados] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [certificados] SET RECOVERY FULL 
GO
ALTER DATABASE [certificados] SET  MULTI_USER 
GO
ALTER DATABASE [certificados] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [certificados] SET DB_CHAINING OFF 
GO
ALTER DATABASE [certificados] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [certificados] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [certificados] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [certificados] SET ACCELERATED_DATABASE_RECOVERY = OFF  
GO
EXEC sys.sp_db_vardecimal_storage_format N'certificados', N'ON'
GO
ALTER DATABASE [certificados] SET QUERY_STORE = ON
GO
ALTER DATABASE [certificados] SET QUERY_STORE (OPERATION_MODE = READ_WRITE, CLEANUP_POLICY = (STALE_QUERY_THRESHOLD_DAYS = 30), DATA_FLUSH_INTERVAL_SECONDS = 900, INTERVAL_LENGTH_MINUTES = 60, MAX_STORAGE_SIZE_MB = 1000, QUERY_CAPTURE_MODE = AUTO, SIZE_BASED_CLEANUP_MODE = AUTO, MAX_PLANS_PER_QUERY = 200, WAIT_STATS_CAPTURE_MODE = ON)
GO
USE [certificados]
GO
/****** Object:  Table [dbo].[certificado]    Script Date: 23/03/2024 17:51:43 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[certificado](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[ano] [date] NOT NULL,
	[id_estudante] [int] NOT NULL,
	[id_instituicao] [int] NOT NULL,
	[id_notas] [int] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Estudante]    Script Date: 23/03/2024 17:51:43 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Estudante](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[nome] [varchar](50) NOT NULL,
	[nascimento] [date] NOT NULL,
	[ano_conclusao] [date] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[instituicao]    Script Date: 23/03/2024 17:51:43 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[instituicao](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[nome] [varchar](50) NOT NULL,
	[provincia] [varchar](30) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[login]    Script Date: 23/03/2024 17:51:43 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[login](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[id_Instituicao] [int] NULL,
	[password] [varchar](20) NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[notas]    Script Date: 23/03/2024 17:51:43 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[notas](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[id_estudante] [int] NOT NULL,
	[portugues] [tinyint] NOT NULL,
	[matematica] [tinyint] NOT NULL,
	[quimica] [tinyint] NOT NULL,
	[biologia] [tinyint] NOT NULL,
	[fisica] [tinyint] NOT NULL,
	[geografia] [tinyint] NOT NULL,
	[ingles] [tinyint] NOT NULL,
	[historia] [tinyint] NOT NULL,
	[frances] [tinyint] NOT NULL,
	[filosofia] [tinyint] NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON, OPTIMIZE_FOR_SEQUENTIAL_KEY = OFF) ON [PRIMARY]
) ON [PRIMARY]
GO
ALTER TABLE [dbo].[certificado]  WITH CHECK ADD  CONSTRAINT [FK_estudante_id] FOREIGN KEY([id_estudante])
REFERENCES [dbo].[Estudante] ([id])
GO
ALTER TABLE [dbo].[certificado] CHECK CONSTRAINT [FK_estudante_id]
GO
ALTER TABLE [dbo].[certificado]  WITH CHECK ADD  CONSTRAINT [FK_instituicao_id] FOREIGN KEY([id_instituicao])
REFERENCES [dbo].[instituicao] ([id])
GO
ALTER TABLE [dbo].[certificado] CHECK CONSTRAINT [FK_instituicao_id]
GO
ALTER TABLE [dbo].[certificado]  WITH CHECK ADD  CONSTRAINT [FK_notas_id] FOREIGN KEY([id_notas])
REFERENCES [dbo].[notas] ([id])
GO
ALTER TABLE [dbo].[certificado] CHECK CONSTRAINT [FK_notas_id]
GO
ALTER TABLE [dbo].[login]  WITH CHECK ADD FOREIGN KEY([id_Instituicao])
REFERENCES [dbo].[instituicao] ([id])
GO
ALTER TABLE [dbo].[notas]  WITH CHECK ADD FOREIGN KEY([id_estudante])
REFERENCES [dbo].[Estudante] ([id])
GO
USE [master]
GO
ALTER DATABASE [certificados] SET  READ_WRITE 
GO
