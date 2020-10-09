from flask import Flask
import json

app = Flask(__name__)

@app.route('/')
def home():
    result_dict = {
        'products': [
            'Ball',
            'Ice cream',
            "Banana", 
            "Bike"
        ]
    }
    return json.dumps(result_dict), 200

if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0', port=80)