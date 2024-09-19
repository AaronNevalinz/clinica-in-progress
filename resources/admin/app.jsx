import React, { useEffect, useState } from 'react';
import { createRoot } from 'react-dom/client'

function Admin() {
    const [user, setUser] = useState(null);
    const [error, setError] = useState(null);

    useEffect(() => {
        fetch('/api/user')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();  // Parse as JSON
            })
            .then(data => setUser(data))
            .catch(err => setError(err.message));  // Catch any parsing errors
    }, []);

    if (error) return <div>Error: {error}</div>;
    if (!user) return <div>Loading...</div>;

    return (
        <div>
            <h1>Welcome to the Admin Dashboard</h1>
            <p>Name: {user.name}</p>
            <p>Email: {user.email}</p>
        </div>
    );
}
const container = document.getElementById('admin');
const root = createRoot(container); // createRoot(container!) if you use TypeScript
root.render(<Admin/>);