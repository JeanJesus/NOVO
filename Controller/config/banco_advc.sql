--
-- PostgreSQL database dump
--

-- Dumped from database version 10.5 (Ubuntu 10.5-0ubuntu0.18.04)
-- Dumped by pg_dump version 10.5 (Ubuntu 10.5-0ubuntu0.18.04)

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
    senha character varying
);


ALTER TABLE public.login OWNER TO jean;

--
-- Name: login_id_seq; Type: SEQUENCE; Schema: public; Owner: jean
--

CREATE SEQUENCE public.login_id_seq
    AS integer
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
-- Name: login id; Type: DEFAULT; Schema: public; Owner: jean
--

ALTER TABLE ONLY public.login ALTER COLUMN id SET DEFAULT nextval('public.login_id_seq'::regclass);


--
-- Data for Name: login; Type: TABLE DATA; Schema: public; Owner: jean
--

COPY public.login (id, email, senha) FROM stdin;
1	jean@hotmail.com	202cb962ac59075b964b07152d234b70
\.


--
-- Name: login_id_seq; Type: SEQUENCE SET; Schema: public; Owner: jean
--

SELECT pg_catalog.setval('public.login_id_seq', 1, true);


--
-- Name: login login_pkey; Type: CONSTRAINT; Schema: public; Owner: jean
--

ALTER TABLE ONLY public.login
    ADD CONSTRAINT login_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

