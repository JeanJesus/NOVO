--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.10
-- Dumped by pg_dump version 9.6.10

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
    id integer NOT NULL,
    email character varying,
    senha character varying,
    primeiro_nome character varying,
    ultimo_nome character varying
);


ALTER TABLE public.login OWNER TO jean;

--
-- Name: tbl_001_clientes; Type: TABLE; Schema: public; Owner: jean
--

CREATE TABLE public.tbl_001_clientes (
    id_clientes integer NOT NULL,
    nome_cliente character varying,
    email character varying,
    data_nascimento date,
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
    data_audiencia date,
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

COPY public.login (id, email, senha, primeiro_nome, ultimo_nome) FROM stdin;
1	jean@hotmail.com	202cb962ac59075b964b07152d234b70	Jean	Jesus
2	jeandf29@hotmail.com	0b8a28d29cb5a3a9dddeb3d3fcd11e59	Jean	Jesus
\.


--
-- Data for Name: tbl_001_clientes; Type: TABLE DATA; Schema: public; Owner: jean
--

COPY public.tbl_001_clientes (id_clientes, nome_cliente, email, data_nascimento, cpf, rg, estado_civil, cep, endereco, bairro, cidade, estado, numero, complemento, escolaridade, profissao, telefone) FROM stdin;
\.


--
-- Name: tbl_001_clientes_id_clientes_seq; Type: SEQUENCE SET; Schema: public; Owner: jean
--

SELECT pg_catalog.setval('public.tbl_001_clientes_id_clientes_seq', 1, false);


--
-- Data for Name: tbl_002_advogados; Type: TABLE DATA; Schema: public; Owner: jean
--

COPY public.tbl_002_advogados (id_advogado, nome, cpf, data_nascimento, rg, estado_civil, telefone, seccional, oab_numero, data_expedicao, data_validade, tipo_caso) FROM stdin;
\.


--
-- Name: tbl_002_advogados_id_advogado_seq; Type: SEQUENCE SET; Schema: public; Owner: jean
--

SELECT pg_catalog.setval('public.tbl_002_advogados_id_advogado_seq', 1, false);


--
-- Data for Name: tbl_003_agendamentos; Type: TABLE DATA; Schema: public; Owner: jean
--

COPY public.tbl_003_agendamentos (id_agendamento, fk_cpf_cliente, fk_oab_advogado, data_audiencia, horario, tipo_caso, descricao) FROM stdin;
\.


--
-- Name: tbl_003_agendamentos_id_agendamento_seq; Type: SEQUENCE SET; Schema: public; Owner: jean
--

SELECT pg_catalog.setval('public.tbl_003_agendamentos_id_agendamento_seq', 1, false);


--
-- Name: login login_pkey; Type: CONSTRAINT; Schema: public; Owner: jean
--

ALTER TABLE ONLY public.login
    ADD CONSTRAINT login_pkey PRIMARY KEY (id);


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

