--
-- PostgreSQL database dump
--

-- Dumped from database version 10.14 (Ubuntu 10.14-0ubuntu0.18.04.1)
-- Dumped by pg_dump version 10.14 (Ubuntu 10.14-0ubuntu0.18.04.1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: ibm; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE ibm WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'en_US.UTF-8' LC_CTYPE = 'en_US.UTF-8';


ALTER DATABASE ibm OWNER TO postgres;

\connect ibm

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
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
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    username character varying(25) NOT NULL,
    password character varying(255) NOT NULL,
    email character varying(25) NOT NULL,
    first_name character varying(50) NOT NULL,
    last_name character varying(25) NOT NULL,
    team character varying(50),
    role_id integer NOT NULL
);


ALTER TABLE public.users OWNER TO postgres;

--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (username, password, email, first_name, last_name, team, role_id) FROM stdin;
345	$2y$10$yf7roqFBTIWiGDKVsKi2WuUK9A3oxE4yHd54qQm1AChm/Mg6LCYBa	v@123sss.dk	65	43		1
123	$2y$10$MYl9tMYXSqznxVDPGeBZtegN24u3rmXaL6ypMAce6wBo4.XcDOqpG	v@123.dk	123	123		1
svenne	$2y$10$ajjJ/We2DzK5AkF0nbfk.eOgkXBun2b2.ngdBEUvG9fSgEyI5TkrG	svendber@hotmail.co.uk	Svend	Berthelsen		1
svendber	$2y$10$8rhQ04xV5g.cQfNcXdAph.WEbsuvQqN4JKQ7XvPgl/n7z7Oo.zm4y	svendber9@gmail.com	Svend	Berthelsen		1
\.


--
-- Name: users users_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pk PRIMARY KEY (email);


--
-- Name: users_email_uindex; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX users_email_uindex ON public.users USING btree (email);


--
-- PostgreSQL database dump complete
--

