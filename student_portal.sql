CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    matric_number VARCHAR(15) UNIQUE NOT NULL,
    password VARCHAR(255) DEFAULT 'defaultpassword',
    name VARCHAR(100),
    department VARCHAR(50)
);

INSERT INTO students (matric_number, name, department) 
VALUES
('BU/20/001', 'John Doe', 'Computer Science'),
('BU/20/002', 'Jane Smith', 'Mass Communication'),
('BU/20/003', 'Samuel Johnson', 'Accounting');

CREATE TABLE course_materials (
    id INT AUTO_INCREMENT PRIMARY KEY,
    course_code VARCHAR(10) NOT NULL,
    course_name VARCHAR(100),
    material_link TEXT,
    description TEXT
);

INSERT INTO course_materials (course_code, course_name, material_link, description) 
VALUES
('CSC101', 'Introduction to Computing', 'https://example.com/csc101-material', 'Basic concepts of computer science.'),
('ENG102', 'Communication Skills', 'https://example.com/eng102-material', 'Focus on writing and speaking skills.'),
('MTH101', 'Calculus I', 'https://example.com/mth101-material', 'Introduction to differential calculus.');

