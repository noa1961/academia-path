-- Project Database

CREATE DATABASE IF NOT EXISTS academiapathio CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

USE academiapathio;

-- Create Admin User

CREATE USER 'adm'@'%' IDENTIFIED BY 'Adm123!!';
GRANT ALL PRIVILEGES ON academiapathio.* TO 'adm'@'%';

exit

mysql -u adm -p


-- Create Tables



-- Table 'type' (public or private college)
CREATE TABLE type (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    type VARCHAR(7) NOT NULL,

    PRIMARY KEY(id)
);


-- Table 'location'
CREATE TABLE location (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    state VARCHAR(50) NOT NULL UNIQUE,
    abbreviation VARCHAR(2) NOT NULL UNIQUE,

    PRIMARY KEY(id)
);


-- Table 'major'
CREATE TABLE major (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    field VARCHAR(50) NOT NULL,
    name VARCHAR(50) NOT NULL,

    PRIMARY KEY(id)
);


-- Table 'college'
CREATE TABLE college (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    acceptance_rate SMALLINT UNSIGNED NOT NULL,
    graduation_rate SMALLINT UNSIGNED NOT NULL,
    cost INT UNSIGNED NOT NULL,
    ranking SMALLINT UNSIGNED NOT NULL UNIQUE,
    type_id BIGINT UNSIGNED NOT NULL,
    location_id BIGINT UNSIGNED NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(type_id) REFERENCES type(id),
    FOREIGN KEY(location_id) REFERENCES location(id)
);


-- Table many-to-many 'college' with 'major'
CREATE TABLE college_major (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    major_id BIGINT UNSIGNED NOT NULL,
    college_id BIGINT UNSIGNED NOT NULL,

    PRIMARY KEY(id),
    FOREIGN KEY(major_id) REFERENCES major(id),
    FOREIGN KEY(college_id) REFERENCES college(id)
);


-- Table 'user'
CREATE TABLE user (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(100) NOT NULL,
    role VARCHAR(50) NOT NULL,

    PRIMARY KEY(id)
);


-- Insert Data

-- College Type
INSERT INTO type(type) VALUES ("Public");
INSERT INTO type(type) VALUES ("Private");

-- Locations
INSERT INTO location(state, abbreviation) VALUE ("Alabama", "AL");
INSERT INTO location(state, abbreviation) VALUE ("Alaska", "AK");
INSERT INTO location(state, abbreviation) VALUE ("American Samoa", "AS");
INSERT INTO location(state, abbreviation) VALUE ("Arizona", "AZ");
INSERT INTO location(state, abbreviation) VALUE ("Arkansas", "AR");
INSERT INTO location(state, abbreviation) VALUE ("California", "CA");
INSERT INTO location(state, abbreviation) VALUE ("Colorado", "CO");
INSERT INTO location(state, abbreviation) VALUE ("Connecticut", "CT");
INSERT INTO location(state, abbreviation) VALUE ("Alabama", "AL");
INSERT INTO location(state, abbreviation) VALUE ("Delaware", "DE");
INSERT INTO location(state, abbreviation) VALUE ("District of Columbia", "DC");
INSERT INTO location(state, abbreviation) VALUE ("Florida", "FL");
INSERT INTO location(state, abbreviation) VALUE ("Georgia", "GA");
INSERT INTO location(state, abbreviation) VALUE ("Guam", "GU");
INSERT INTO location(state, abbreviation) VALUE ("Hawaii", "HI");
INSERT INTO location(state, abbreviation) VALUE ("Idaho", "ID");
INSERT INTO location(state, abbreviation) VALUE ("Illinois", "IL");
INSERT INTO location(state, abbreviation) VALUE ("Indiana", "IN");
INSERT INTO location(state, abbreviation) VALUE ("Iowa", "IA");
INSERT INTO location(state, abbreviation) VALUE ("Kansas", "KS");
INSERT INTO location(state, abbreviation) VALUE ("Kentucky", "KY");
INSERT INTO location(state, abbreviation) VALUE ("Louisiana", "LA");
INSERT INTO location(state, abbreviation) VALUE ("Maine", "ME");
INSERT INTO location(state, abbreviation) VALUE ("Maryland", "MD");
INSERT INTO location(state, abbreviation) VALUE ("Massachusetts", "MA");
INSERT INTO location(state, abbreviation) VALUE ("Michigan", "MI");
INSERT INTO location(state, abbreviation) VALUE ("Minnesota", "MN");
INSERT INTO location(state, abbreviation) VALUE ("Mississippi", "MS");
INSERT INTO location(state, abbreviation) VALUE ("Missouri", "MO");
INSERT INTO location(state, abbreviation) VALUE ("Montana", "MT");
INSERT INTO location(state, abbreviation) VALUE ("Nebraska", "NE");
INSERT INTO location(state, abbreviation) VALUE ("Nevada", "NV");
INSERT INTO location(state, abbreviation) VALUE ("New Hampshire", "NH");
INSERT INTO location(state, abbreviation) VALUE ("New Jersey", "NJ");
INSERT INTO location(state, abbreviation) VALUE ("New Mexico", "NM");
INSERT INTO location(state, abbreviation) VALUE ("New York", "NY");
INSERT INTO location(state, abbreviation) VALUE ("North Carolina", "NC");
INSERT INTO location(state, abbreviation) VALUE ("North Dakota", "ND");
INSERT INTO location(state, abbreviation) VALUE ("Northern Mariana Islands", "MP");
INSERT INTO location(state, abbreviation) VALUE ("Ohio", "OH");
INSERT INTO location(state, abbreviation) VALUE ("Oklahoma", "OK");
INSERT INTO location(state, abbreviation) VALUE ("Oregon", "OR");
INSERT INTO location(state, abbreviation) VALUE ("Pennsylvania", "PA");
INSERT INTO location(state, abbreviation) VALUE ("Puerto Rico", "PR");
INSERT INTO location(state, abbreviation) VALUE ("Rhode Island", "RI");
INSERT INTO location(state, abbreviation) VALUE ("South Carolina", "SC");
INSERT INTO location(state, abbreviation) VALUE ("South Dakota", "SD");
INSERT INTO location(state, abbreviation) VALUE ("Tennessee", "TN");
INSERT INTO location(state, abbreviation) VALUE ("Texas", "TX");
INSERT INTO location(state, abbreviation) VALUE ("Utah", "UT");
INSERT INTO location(state, abbreviation) VALUE ("Vermont", "VT");
INSERT INTO location(state, abbreviation) VALUE ("Virgin Islands U.S.", "VI");
INSERT INTO location(state, abbreviation) VALUE ("Virginia", "VA");
INSERT INTO location(state, abbreviation) VALUE ("Washington", "WA");
INSERT INTO location(state, abbreviation) VALUE ("West Virginia", "WV");
INSERT INTO location(state, abbreviation) VALUE ("Wisconsin", "WI");
INSERT INTO location(state, abbreviation) VALUE ("Wyoming", "WY");





-- Majors
INSERT INTO major(field, name) VALUE ("Agricultural Sciences", "Agriculture");

INSERT INTO major(field, name) VALUE ("Social Sciences", "Anthropology");
INSERT INTO major(field, name) VALUE ("Social Sciences", "Sociology");

INSERT INTO major(field, name) VALUE ("Architecture", "Interior Architecture");
INSERT INTO major(field, name) VALUE ("Architecture", "Landscape Architecture");
INSERT INTO major(field, name) VALUE ("Architecture", "Environmental Architecture and Design");

INSERT INTO major(field, name) VALUE ("Art", "Ceramics");
INSERT INTO major(field, name) VALUE ("Art", "Illustration");
INSERT INTO major(field, name) VALUE ("Art", "Multimedia");
INSERT INTO major(field, name) VALUE ("Art", "Painting");
INSERT INTO major(field, name) VALUE ("Art", "Sculpture");
INSERT INTO major(field, name) VALUE ("Art", "Visual and Performing Arts");

INSERT INTO major(field, name) VALUE ("Biological and Biomedical Sciences", "Biology");
INSERT INTO major(field, name) VALUE ("Biological and Biomedical Sciences", "Bioinformatics");
INSERT INTO major(field, name) VALUE ("Biological and Biomedical Sciences", "Biochemistry");
INSERT INTO major(field, name) VALUE ("Biological and Biomedical Sciences", "Genetics");
INSERT INTO major(field, name) VALUE ("Biological and Biomedical Sciences", "Neuroscience and Neurobiology");

INSERT INTO major(field, name) VALUE ("Business and Management", "Human Resources");
INSERT INTO major(field, name) VALUE ("Business and Management", "International Business");
INSERT INTO major(field, name) VALUE ("Business and Management", "Marketing");

INSERT INTO major(field, name) VALUE ("Computer Science", "Computer Science, General");
INSERT INTO major(field, name) VALUE ("Computer Science", "Computer SOftware Engineering");
INSERT INTO major(field, name) VALUE ("Computer Science", "Computer Graphics");

INSERT INTO major(field, name) VALUE ("Communications and Journalism", "Journalism");
INSERT INTO major(field, name) VALUE ("Communications and Journalism", "Sports Communication");
INSERT INTO major(field, name) VALUE ("Communications and Journalism", "Advertising");

INSERT INTO major(field, name) VALUE ("Criminal Justice and Law Enforcement", "Criminal Justice");
INSERT INTO major(field, name) VALUE ("Criminal Justice and Law Enforcement", "Criminology");
INSERT INTO major(field, name) VALUE ("Criminal Justice and Law Enforcement", "Cyber/Computer Forensics and Counterterrorism");
INSERT INTO major(field, name) VALUE ("Criminal Justice and Law Enforcement", "Financial Forensics");
INSERT INTO major(field, name) VALUE ("Criminal Justice and Law Enforcement", "Forensic Science and Technology");

INSERT INTO major(field, name) VALUE ("Design", "Graphic Design");
INSERT INTO major(field, name) VALUE ("Design", "Interior Design");
INSERT INTO major(field, name) VALUE ("Design", "Web, Product, and User Experience Design");
INSERT INTO major(field, name) VALUE ("Design", "Game Design and Interactive Media");
INSERT INTO major(field, name) VALUE ("Design", "Fashion and Apparel Design");

INSERT INTO major(field, name) VALUE ("Economics", "Economics, General");
INSERT INTO major(field, name) VALUE ("Economics", "Applied Economics");

INSERT INTO major(field, name) VALUE ("Engineering", "Aerospace Engineering");
INSERT INTO major(field, name) VALUE ("Engineering", "Bioengineering and Biomedical Engineering");
INSERT INTO major(field, name) VALUE ("Engineering", "Chemical Engineering");
INSERT INTO major(field, name) VALUE ("Engineering", "Civil Engineering");
INSERT INTO major(field, name) VALUE ("Engineering", "Computer Hardware Engineering");
INSERT INTO major(field, name) VALUE ("Engineering", "Electrical Engineering");
INSERT INTO major(field, name) VALUE ("Engineering", "Mechanical Engineering");
INSERT INTO major(field, name) VALUE ("Engineering", "Industrial Engineering");
INSERT INTO major(field, name) VALUE ("Engineering", "Engineering, General");
INSERT INTO major(field, name) VALUE ("Engineering", "Engineering Physics");

INSERT INTO major(field, name) VALUE ("English and Writing", "Literature");
INSERT INTO major(field, name) VALUE ("English and Writing", "English");
INSERT INTO major(field, name) VALUE ("English and Writing", "Creative Writing");

INSERT INTO major(field, name) VALUE ("Film and Photography", "Photography");
INSERT INTO major(field, name) VALUE ("Film and Photography", "Film and Video Studies");
INSERT INTO major(field, name) VALUE ("Film and Photography", "Cinematography and Video Production");
INSERT INTO major(field, name) VALUE ("Film and Photography", "Animation, Video Graphics, and Special Effects");

INSERT INTO major(field, name) VALUE ("Finance and Accounting", "Finance and Accounting, General");
INSERT INTO major(field, name) VALUE ("Finance and Accounting", "Banking and Finance");

INSERT INTO major(field, name) VALUE ("Foreign Languages", "Chinese Language and Literature");
INSERT INTO major(field, name) VALUE ("Foreign Languages", "Arabic Language and Literature");
INSERT INTO major(field, name) VALUE ("Foreign Languages", "German Language and Literature");
INSERT INTO major(field, name) VALUE ("Foreign Languages", "French Language and Literature");
INSERT INTO major(field, name) VALUE ("Foreign Languages", "Italian Language and Literature");
INSERT INTO major(field, name) VALUE ("Foreign Languages", "Japanese Language and Literature");
INSERT INTO major(field, name) VALUE ("Foreign Languages", "Russian and Eastern European Languages and Literature");
INSERT INTO major(field, name) VALUE ("Foreign Languages", "East Asian Languages and Literature");
INSERT INTO major(field, name) VALUE ("Foreign Languages", "Linguistics, Interpretation, and Translation");
INSERT INTO major(field, name) VALUE ("Foreign Languages", "Foreign Languages and Literatures");


INSERT INTO major(field, name) VALUE ("Global Studies", "African Studies");
INSERT INTO major(field, name) VALUE ("Global Studies", "United States Studies");
INSERT INTO major(field, name) VALUE ("Global Studies", "Asian Studies");
INSERT INTO major(field, name) VALUE ("Global Studies", "European Studies");

INSERT INTO major(field, name) VALUE ("History", "Art History");
INSERT INTO major(field, name) VALUE ("History", "History, General");
INSERT INTO major(field, name) VALUE ("History", "Historic Preservation and Conservation");

INSERT INTO major(field, name) VALUE ("Math", "Mathematics, General");
INSERT INTO major(field, name) VALUE ("History", "Statistics");
INSERT INTO major(field, name) VALUE ("History", "Computational and Applied Mathematics");

INSERT INTO major(field, name) VALUE ("Philosophy and Ethics", "Philosophy, General");
INSERT INTO major(field, name) VALUE ("Philosophy and Ethics", "Ethics");

INSERT INTO major(field, name) VALUE ("Physics", "Astronomy and Astrophysics");
INSERT INTO major(field, name) VALUE ("Physics", "Physics, General");

INSERT INTO major(field, name) VALUE ("Political Science", "Political Science and Government, General");
INSERT INTO major(field, name) VALUE ("Political Science", "United States Government and Politics");

INSERT INTO major(field, name) VALUE ("Psychology", "Behavioral Sciences");
INSERT INTO major(field, name) VALUE ("Psychology", "Counseling Psychology");
INSERT INTO major(field, name) VALUE ("Psychology", "Forensic Psychology");
INSERT INTO major(field, name) VALUE ("Psychology", "Psychology, General");
INSERT INTO major(field, name) VALUE ("Psychology", "Social Psychology");





-- Main user
INSERT INTO user(name, email, password, role)
VALUE ("Tiago Calado", "tiagocalado@gmail.com", "123456789", "admin");





-- Universities / Colleges
INSERT INTO college(name, description, acceptance_rate, graduation_rate, cost, ranking, type_id, location_id)
VALUE (
    "Harvard College",
    "Harvard College is a medium, 4-year, private university. This coed college is located in a city in an urban setting and is primarily a residential campus. It offers bachelor's, master's, and doctoral degrees.",
    4,
    97,
    15000,
    1,
    2,
    25
);




INSERT INTO college(name, description, acceptance_rate, graduation_rate, cost, ranking, type_id, location_id)
VALUE (
    "Stanford University",
    "Stanford University is a medium, 4-year, private university. This coed college is located in a suburban setting and is primarily a residential campus. It offers bachelor's, certificate, master's, and doctoral degrees.",
    4,
    94,
    17000,
    2,
    2,
    6
);




INSERT INTO college(name, description, acceptance_rate, graduation_rate, cost, ranking, type_id, location_id)
VALUE (
    "Massachusetts Institute of Technology",
    "Massachusetts Institute of Technology is a medium, 4-year, private university. This coed college is located in a city in an urban setting and is primarily a residential campus. It offers bachelor's, master's, and doctoral degrees.",
    7,
    95,
    20000,
    3,
    2,
    25
);




INSERT INTO college(name, description, acceptance_rate, graduation_rate, cost, ranking, type_id, location_id)
VALUE (
    "California Institute of Technology",
    "California Institute of Technology is a small, 4-year,
     school. This coed college is located in a city in a suburban setting and is primarily a residential campus. It offers bachelor's, master's, certificate, and doctoral degrees.",
    6,
    94,
    27000,
    4,
    2,
    6
);




INSERT INTO college(name, description, acceptance_rate, graduation_rate, cost, ranking, type_id, location_id)
VALUE (
    "Princeton University",
    "Princeton University is a medium, 4-year, private school. This coed college is located in a large town in a suburban setting and is primarily a residential campus. It offers bachelor's, master's, and doctoral degrees.",
    6,
    98,
    19000,
    5,
    2,
    34
);




INSERT INTO college(name, description, acceptance_rate, graduation_rate, cost, ranking, type_id, location_id)
VALUE (
    "University of California: Berkeley",
    "University of California: Berkeley is a very large, 4-year, public technical college. This coed college is located in an urban setting and is primarily a residential campus. It offers bachelor's, certificate, master's, and doctoral degrees.",
    16,
    93,
    19000,
    6,
    1,
    6
);




INSERT INTO college(name, description, acceptance_rate, graduation_rate, cost, ranking, type_id, location_id)
VALUE (
    "Yale University",
    "Yale University is a medium, 4-year, private university. This coed college is located in the city of New Haven, CT in a urban setting and is primarily a residential campus. It offers certificate, bachelor's, master's, and doctoral degrees.",
    6,
    97,
    18000,
    7,
    2,
    8
);




INSERT INTO college(name, description, acceptance_rate, graduation_rate, cost, ranking, type_id, location_id)
VALUE (
    "Columbia University",
    "Columbia University is a medium, 4-year, private university. This coed college is located in a large city in an urban setting and is primarily a residential campus. It offers bachelor's, master's, and doctoral degrees.",
    5,
    95,
    22000,
    8,
    2,
    36
);




INSERT INTO college(name, description, acceptance_rate, graduation_rate, cost, ranking, type_id, location_id)
VALUE (
    "University of Chicago",
    "University of Chicago is a medium, 4-year, private school. This coed college is located in a large city in an urban setting and is primarily a residential campus. It offers bachelor's, certificate, master's, and doctoral degrees.",
    6,
    95,
    35000,
    9,
    2,
    17
);




INSERT INTO college(name, description, acceptance_rate, graduation_rate, cost, ranking, type_id, location_id)
VALUE (
    "University of Pennsylvania",
    "University of Pennsylvania is a large, 4-year, private school. This coed college is located in an urban setting and is primarily a residential campus. It offers certificate, associate, bachelor's, master's, and doctoral degrees.",
    8,
    96,
    25000,
    10,
    2,
    43
);


INSERT INTO college(name, description, acceptance_rate, graduation_rate, cost, ranking, type_id, location_id)
VALUE (
    "Duke University",
    "Duke University is a medium, 4-year, private technical college. This coed college is located in a suburban setting and is primarily a residential campus. It offers bachelor's, certificate, master's, and doctoral degrees.",
    8,
    95,
    24000,
    11,
    2,
    36
);