import os

# Define the base directory containing HTML files
base_dir = 'html'

# Define the base URL prefix 'https://www.teyzeevisas.com/'
base_url = 'https://github.com/WebCoder02/ANUJ_Github/tree/main/TeyZee_Visa-main-7/' 

# Initialize a dictionary to hold country-wise HTML files
sitemap_dict = {}

# Traverse the base directory
for root, dirs, files in os.walk(base_dir):
    # Determine the relative path from the base directory
    rel_path = os.path.relpath(root, base_dir)
    # Use the relative path as the country/category name
    country = rel_path if rel_path != '.' else 'General Pages'
    # Initialize the list for this country if not already present
    if country not in sitemap_dict:
        sitemap_dict[country] = []
    for file in files:
        if file.endswith('.html'):
            # Construct the relative URL path
            file_path = os.path.join(rel_path, file) if rel_path != '.' else file
            sitemap_dict[country].append(file_path)

# Begin constructing the HTML content
html_content = '''<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sitemap – TeyZee Visas</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 2rem; }
        h1 { color: #2c3e50; }
        h2 { color: #34495e; margin-top: 1.5rem; }
        ul { list-style-type: none; padding-left: 1rem; }
        li { margin: 0.3rem 0; }
        a { text-decoration: none; color: #2980b9; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h1>Sitemap</h1>
'''

# Add links for each country/category
for country in sorted(sitemap_dict.keys()):
    html_content += f'    <h2>{country.capitalize()}</h2>\n    <ul>\n'
    for file_path in sorted(sitemap_dict[country]):
        # Generate a user-friendly link name
        link_name = os.path.splitext(os.path.basename(file_path))[0].replace('-', ' ').capitalize()
        # Construct the full URL
        full_url = base_url + file_path.replace('\\', '/')
        html_content += f'        <li><a href="{full_url}">{link_name}</a></li>\n'
    html_content += '    </ul>\n'

# Close the HTML tags
html_content += '''</body>
</html>
'''

# Write the content to sitemap.html
with open(os.path.join(base_dir, 'sitemap.html'), 'w', encoding='utf-8') as f:
    f.write(html_content)

print("sitemap.html has been generated successfully.")
