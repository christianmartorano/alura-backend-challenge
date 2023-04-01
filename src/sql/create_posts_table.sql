CREATE TABLE posts (
    id SERIAL PRIMARY KEY,
    post TEXT NOT NULL,
    user_id INTEGER NOT NULL REFERENCES users(id),
    animal_id INTEGER NOT NULL REFERENCES animals(id)
    created_at TIMESTAMP DEFAULT NOW(),
    updated_at TIMESTAMP DEFAULT NOW(),
);