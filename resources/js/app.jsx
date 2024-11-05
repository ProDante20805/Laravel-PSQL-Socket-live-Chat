import React from 'react';
import { createRoot } from 'react-dom/client'; // Import createRoot from react-dom/client
import App from './components/App';

// Get the container to mount the React application
const container = document.getElementById('app');

// Create a root and render the App component
const root = createRoot(container);
root.render(<App />);
