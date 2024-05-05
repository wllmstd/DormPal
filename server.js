const express = require('express');
const bodyParser = require('body-parser');
const twilio = require('twilio');

const app = express();
const PORT = 3000;

// Twilio credentials
const accountSid = 'ACab41b9b777113d545cbda7fd59553f43';
const authToken = '8da494880b3ba7a43f606c56d1c27f1f';
const client = new twilio(accountSid, authToken);

// Body parser middleware
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

// POST endpoint to send message
app.post('/send-message', (req, res) => {
    // Send text message
    client.messages.create({
        body: 'Your message here',
        from: '+12513125201',
        to: '+639064691786'
    })
    .then(message => {
        console.log(message.sid);
        res.send('Message sent!');
    })
    .catch(err => {
        console.error(err);
        res.status(500).send('Error sending message');
    });
});

// Start server
app.listen(PORT, () => {
    console.log(`Server is running on http://localhost:${PORT}`);
});
