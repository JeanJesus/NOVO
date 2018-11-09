--
-- PostgreSQL database dump
--

-- Dumped from database version 10.4 (Ubuntu 10.4-0ubuntu0.18.04)
-- Dumped by pg_dump version 10.4 (Ubuntu 10.4-0ubuntu0.18.04)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: login; Type: TABLE; Schema: public; Owner: jean
--

CREATE TABLE public.login (
    email character varying,
    senha character varying,
    primeiro_nome character varying,
    ultimo_nome character varying,
    id integer NOT NULL
);


ALTER TABLE public.login OWNER TO jean;

--
-- Name: login_id_seq; Type: SEQUENCE; Schema: public; Owner: jean
--

CREATE SEQUENCE public.login_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.login_id_seq OWNER TO jean;

--
-- Name: login_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jean
--

ALTER SEQUENCE public.login_id_seq OWNED BY public.login.id;


--
-- Name: tbl_001_clientes; Type: TABLE; Schema: public; Owner: jean
--

CREATE TABLE public.tbl_001_clientes (
    id_clientes integer NOT NULL,
    nome_cliente character varying,
    email character varying,
    data_nascimento character varying,
    cpf character varying(11),
    rg character varying(10),
    estado_civil character varying,
    cep character varying,
    endereco character varying,
    bairro character varying,
    cidade character varying,
    estado character varying,
    numero integer,
    complemento character varying,
    escolaridade character varying,
    profissao character varying,
    telefone character varying
);


ALTER TABLE public.tbl_001_clientes OWNER TO jean;

--
-- Name: tbl_001_clientes_id_clientes_seq; Type: SEQUENCE; Schema: public; Owner: jean
--

CREATE SEQUENCE public.tbl_001_clientes_id_clientes_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tbl_001_clientes_id_clientes_seq OWNER TO jean;

--
-- Name: tbl_001_clientes_id_clientes_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jean
--

ALTER SEQUENCE public.tbl_001_clientes_id_clientes_seq OWNED BY public.tbl_001_clientes.id_clientes;


--
-- Name: tbl_002_advogados; Type: TABLE; Schema: public; Owner: jean
--

CREATE TABLE public.tbl_002_advogados (
    id_advogado integer NOT NULL,
    nome character varying,
    cpf character varying,
    data_nascimento date,
    rg character varying,
    estado_civil character varying,
    telefone character varying,
    seccional character varying,
    oab_numero character varying,
    data_expedicao date,
    data_validade date,
    tipo_caso character varying
);


ALTER TABLE public.tbl_002_advogados OWNER TO jean;

--
-- Name: tbl_002_advogados_id_advogado_seq; Type: SEQUENCE; Schema: public; Owner: jean
--

CREATE SEQUENCE public.tbl_002_advogados_id_advogado_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tbl_002_advogados_id_advogado_seq OWNER TO jean;

--
-- Name: tbl_002_advogados_id_advogado_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jean
--

ALTER SEQUENCE public.tbl_002_advogados_id_advogado_seq OWNED BY public.tbl_002_advogados.id_advogado;


--
-- Name: tbl_003_agendamentos; Type: TABLE; Schema: public; Owner: jean
--

CREATE TABLE public.tbl_003_agendamentos (
    id_agendamento integer NOT NULL,
    fk_cpf_cliente character varying,
    fk_oab_advogado character varying,
    data_audiencia character varying,
    horario time without time zone,
    tipo_caso character varying,
    descricao character varying
);


ALTER TABLE public.tbl_003_agendamentos OWNER TO jean;

--
-- Name: tbl_003_agendamentos_id_agendamento_seq; Type: SEQUENCE; Schema: public; Owner: jean
--

CREATE SEQUENCE public.tbl_003_agendamentos_id_agendamento_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tbl_003_agendamentos_id_agendamento_seq OWNER TO jean;

--
-- Name: tbl_003_agendamentos_id_agendamento_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: jean
--

ALTER SEQUENCE public.tbl_003_agendamentos_id_agendamento_seq OWNED BY public.tbl_003_agendamentos.id_agendamento;


--
-- Name: login id; Type: DEFAULT; Schema: public; Owner: jean
--

ALTER TABLE ONLY public.login ALTER COLUMN id SET DEFAULT nextval('public.login_id_seq'::regclass);


--
-- Name: tbl_001_clientes id_clientes; Type: DEFAULT; Schema: public; Owner: jean
--

ALTER TABLE ONLY public.tbl_001_clientes ALTER COLUMN id_clientes SET DEFAULT nextval('public.tbl_001_clientes_id_clientes_seq'::regclass);


--
-- Name: tbl_002_advogados id_advogado; Type: DEFAULT; Schema: public; Owner: jean
--

ALTER TABLE ONLY public.tbl_002_advogados ALTER COLUMN id_advogado SET DEFAULT nextval('public.tbl_002_advogados_id_advogado_seq'::regclass);


--
-- Name: tbl_003_agendamentos id_agendamento; Type: DEFAULT; Schema: public; Owner: jean
--

ALTER TABLE ONLY public.tbl_003_agendamentos ALTER COLUMN id_agendamento SET DEFAULT nextval('public.tbl_003_agendamentos_id_agendamento_seq'::regclass);


--
-- Data for Name: login; Type: TABLE DATA; Schema: public; Owner: jean
--

COPY public.login (email, senha, primeiro_nome, ultimo_nome, id) FROM stdin;
jean@hotmail.com	202cb962ac59075b964b07152d234b70	Jean	Jesus	1
jeansouza@hotmail.com	202cb962ac59075b964b07152d234b70	Jean	Souza	8
\.


--
-- Data for Name: tbl_001_clientes; Type: TABLE DATA; Schema: public; Owner: jean
--

COPY public.tbl_001_clientes (id_clientes, nome_cliente, email, data_nascimento, cpf, rg, estado_civil, cep, endereco, bairro, cidade, estado, numero, complemento, escolaridade, profissao, telefone) FROM stdin;
5	Antonio Silva	AntonioSilva@outlook.com	22/02/1991	04995509890	8393029	Solteiro(a)	72850615	Rua Caçapava	Jardim Zuleika	Luziânia	GO	12	S/N	Analfabeto	ADMINISTRADOR	61 99485-7484
7	Antonio Luiz da Costa	AntonioLc@outlook.com	10/11/1990	74893746478	674638	Solteiro(a)	72850615	Rua Caçapava	Jardim Zuleika	Luziânia	GO	12	S/N	Analfabeto	PROGRAMADOR 	61 99485-7489
8	Rebeca Cristina	RebecaCris@hotmail.com	01/08/2000	05734516253	765103	Solteiro(a)	72800230	Travessa Epaminondas Roriz	Centro	Luziânia	GO	12	S/N	Superior Incompleto	GERENTE COMERCIAL	61 84759-3843
9	Sophia Fernandes de Jesus	SophiaFernandes@outlook.com	29/01/1995	02135186733	6178546	Solteiro(a)	73100020	Rua 00	Núcleo Rural Lago Oeste (Sobradinho)	Brasília	DF	22	S/N	Superior Completo	DESEMBARGADOR(A)	21 99837-4846
10	Charles Jesus Dos Santos	charlesjesusdossantos@gmail.com	28/01/1992	05738493847	6574839	Divorciado(a)	72853118	Quadra 118	Parque Estrela Dalva IX	Luziânia	GO	12	LT 02	Superior Incompleto	Monitor de Qualidade	61 99485-6479
11	Maria Francisca	maria@hotmail.com	29/01/1988	05847362733	6154873	Casado(a)	72726103	Quadra 5 Conjunto C	Veredas (Brazlândia)	Brasília	DF	89	S/N	Fundamental Completo	APOSENTADO	61  9478-4847
12	Fabio Junior Rodrigues	fabiojunior80@hotmail.com	07/01/1998	78694846378	645637	Casado(a)	72726103	Quadra 5 Conjunto C	Veredas (Brazlândia)	Brasília	DF	15	S/N	Médio Completo	ENGENHEIRO CIVIL	61 98746-3563
13	Cristiane Santos Da Silva	CristianeSilva@gmail.com	12/12/1992	95784763636	6478573	Divorciado(a)	73015132	Quadra 2 Conjunto A-6 Bloco 1	Sobradinho	Brasília	DF	12	S/N	Médio Incompleto	ANALISTA DE T.I	61 99474-7836
14	Antonia Maria Das Graças	AntoniaMaria@gmail.com	09/08/1977	94773873773	73847378	Solteiro(a)	51011410	Rua Gago Coutinho	Pina	Recife	PE	12	S/N	Médio Incompleto	MONTADOR	61 94857-4778
15	Stella Gabrielly Sara Jesus	StellaGabrielly@hotmail.com	05/02/1996	63139182589	117065584	Solteiro(a)	54735300	Rua Tito Pereira	Centro	São Lourenço da Mata	PE	787	S/N	Médio Completo	ASSISTENTE ADMINISTRATIVO	61 99954-5484
16	Josivaldo da silva	josivaldoSilva@gmail.com	02/02/1992	05735105144	6161456	Solteiro(a)	72850615	Rua Caçapava	Jardim Zuleika	Luziânia	GO	55	S/N	Médio Incompleto	ATENDENTE DE TELEMARKETING	61 99548-5451
17	JOSUÉ DA SILVA SANTOS	JOSUESANTOS@YAHOO.COM	22/05/1995	22233344455	6176550	Casado(a)	72006271	Rua 4B Chácara 283	Setor Habitacional Vicente Pires	Brasília	DF	45	S/N	Médio Incompleto	ANALISTA DE REDES	61 98547-7845
\.


--
-- Data for Name: tbl_002_advogados; Type: TABLE DATA; Schema: public; Owner: jean
--

COPY public.tbl_002_advogados (id_advogado, nome, cpf, data_nascimento, rg, estado_civil, telefone, seccional, oab_numero, data_expedicao, data_validade, tipo_caso) FROM stdin;
1	Bernardo Pedro Henrique Francisco Ferreira	19508007761	1996-12-23	432017239	Casado(a)	61 99544-1822	GO	152533	2018-02-15	2018-12-31	Direito da Tecnologia da Informação
3	Marcelo Luiz Bryan Assunção	53065800179	1996-08-16	453573447	Selecionar	61 99954-8458	DF	448596	2018-02-20	2019-02-20	Direito Penal
4	Marcelo Luiz Bryan Assunção	53065800179	1996-08-16	453573447	Casado(a)	61 98544-1622	PA	99581426	2018-01-01	2019-01-01	Direito Trabalhista
5	Natália Brenda Ribeiro	58445341740	1990-03-22	614532	Solteiro(a)	61 99518-7551	GO	134679	2018-02-05	2019-02-05	Direito Familiar
\.


--
-- Data for Name: tbl_003_agendamentos; Type: TABLE DATA; Schema: public; Owner: jean
--

COPY public.tbl_003_agendamentos (id_agendamento, fk_cpf_cliente, fk_oab_advogado, data_audiencia, horario, tipo_caso, descricao) FROM stdin;
5	78694846378	152533	10/12/2018	15:45:00	Direito da Tecnologia da Informação	Audiência será realizada no 2°tribunal de Tecnologia -DF.\r\n
10	05735105144	134679	03/02/2019	14:30:00	Direito Familiar	Local: Tribunal Familiar -DF.\r\nAudiência referente a divórcio.
11	05735105144	134679	22/03/2019	16:30:00	Direito Familiar	LOCAL: Tribunal Da Familia -DF.\r\nAgendamento: Divisão de Bens.
12	05735105144	134679	10/05/2019	13:20:00	Direito Familiar	Tribunal da Família -DF
\.


--
-- Name: login_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jean
--

SELECT pg_catalog.setval('public.login_id_seq', 8, true);


--
-- Name: tbl_001_clientes_id_clientes_seq; Type: SEQUENCE SET; Schema: public; Owner: jean
--

SELECT pg_catalog.setval('public.tbl_001_clientes_id_clientes_seq', 17, true);


--
-- Name: tbl_002_advogados_id_advogado_seq; Type: SEQUENCE SET; Schema: public; Owner: jean
--

SELECT pg_catalog.setval('public.tbl_002_advogados_id_advogado_seq', 5, true);


--
-- Name: tbl_003_agendamentos_id_agendamento_seq; Type: SEQUENCE SET; Schema: public; Owner: jean
--

SELECT pg_catalog.setval('public.tbl_003_agendamentos_id_agendamento_seq', 12, true);


--
-- Name: tbl_001_clientes tbl_001_clientes_cpf_key; Type: CONSTRAINT; Schema: public; Owner: jean
--

ALTER TABLE ONLY public.tbl_001_clientes
    ADD CONSTRAINT tbl_001_clientes_cpf_key UNIQUE (cpf);


--
-- Name: tbl_002_advogados tbl_002_advogados_oab_numero_key; Type: CONSTRAINT; Schema: public; Owner: jean
--

ALTER TABLE ONLY public.tbl_002_advogados
    ADD CONSTRAINT tbl_002_advogados_oab_numero_key UNIQUE (oab_numero);


--
-- Name: tbl_003_agendamentos tbl_003_agendamentos_fk_cpf_cliente_fkey; Type: FK CONSTRAINT; Schema: public; Owner: jean
--

ALTER TABLE ONLY public.tbl_003_agendamentos
    ADD CONSTRAINT tbl_003_agendamentos_fk_cpf_cliente_fkey FOREIGN KEY (fk_cpf_cliente) REFERENCES public.tbl_001_clientes(cpf);


--
-- Name: tbl_003_agendamentos tbl_003_agendamentos_fk_oab_advogado_fkey; Type: FK CONSTRAINT; Schema: public; Owner: jean
--

ALTER TABLE ONLY public.tbl_003_agendamentos
    ADD CONSTRAINT tbl_003_agendamentos_fk_oab_advogado_fkey FOREIGN KEY (fk_oab_advogado) REFERENCES public.tbl_002_advogados(oab_numero);


--
-- PostgreSQL database dump complete
--

