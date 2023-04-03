CREATE TABLE addresses (
    id SERIAL PRIMARY KEY,
    city VARCHAR(255) NOT NULL,
    province VARCHAR(2) NOT NULL,
    created_at TIMESTAMP DEFAULT NOW(),
    updated_at TIMESTAMP DEFAULT NOW(),
);