---
title: "Sports Stats - A Postgres Database and Python Application"
excerpt: "A data engineering project to retrieve seasonal statistics on the MLB, NBA, and NHL."
collection: portfolio
---

**Project Overview:**
This project leverages object-oriented programming (OOP) principles and data engineering techniques to design and implement a PostgreSQL database for sports statistics. The database schema includes four core tables — `seasons`, `leagues`, `teams`, and `standings`. These table relationships are visualized in the Entity Relationship Diagram (ERD) below and can be queried or joined within PostgreSQL for analysis.

More: [SportsStats on Github](https://github.com/Danacw/SportsStats)

**Implementation Details:**
The codebase is organized into a models.py script, where classes are categorized as either Data Classes or Table Classes:

- Data Classes: These classes handle data retrieval for seasons, leagues, teams, and team standings. Each class contains methods to fetch the relevant data and high-level  dictionaries where processed data is stored.

- Table Classes: These classes are responsible for building and managing database tables using the SQLAlchemy library. 

**Challenges Encountered and Future Improvements:**
One primary challenge was obtaining accurate data, particularly related to the NBA API. Accessing the right headers became difficult, and occasionally led to unavailable data. As a temporary solution, data for the seasons table was manually populated, and is something I would like to fix in the future.

To optimize this codebase, I plan to make the following improvements:

- Data Structure Standardization: Refactor dictionaries within the data classes to adopt a uniform nested structure, where each league or team serves as a key.

- Codebase Refactoring: Improve consistency in class methods by adhering more strictly to OOP design principles. This includes standardizing function names and parameters, ensuring modularity, and enhancing maintainability.

- Reproducibility: Optimize data retrieval and processing workflows to guarantee consistent, accurate, and reproducible results as the database evolves.





