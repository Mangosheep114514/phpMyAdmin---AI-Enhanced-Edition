from flask import Flask, render_template

app = Flask(__name__)

# 产品数据
product = {
    "name": "phpMyAdmin的AI助手",
    "tagline": "AI驱动的生产力工具",
    "features": [
        {
            "id": 1,
            "title": "AI生成SQL语句",
            "desc": "根据用户需求生成SQL语句（包括表头、表名、字段名、字段类型、字段长度、字段约束等）",
            "icon": "sql_icon"
        },
        {
            "id": 2,
            "title": "AI生成测试数据",
            "desc": "根据用户需求生成测试数据（包括表头、表名、字段名、字段类型、字段长度、字段约束等）",
            "icon": "test_data_icon"
        },
        {
            "id": 3,
            "title": "审查用户需求修改代码",
            "desc": "用户重述需求或更改需求后，AI给出修改建议",
            "icon": "bug_fixing_icon"
        }
    ]
}

@app.route('/')
def home():
    return render_template('index.html', product=product)

if __name__ == '__main__':
    print("启动Flask应用...")
    print("请访问: http://localhost:5000")
    app.run(host='0.0.0.0', port=5000, debug=True)