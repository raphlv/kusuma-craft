import zipfile
import xml.etree.ElementTree as ET
import os

def read_docx(file_path):
    # docx files are zip files. The main text is in word/document.xml
    try:
        with zipfile.ZipFile(file_path) as z:
            doc_xml = z.read('word/document.xml')
            root = ET.fromstring(doc_xml)
            
            # Namespaces
            ns = {'w': 'http://schemas.openxmlformats.org/wordprocessingml/2006/main'}
            
            # Find all paragraph tags
            paragraphs = []
            for para in root.iter('{http://schemas.openxmlformats.org/wordprocessingml/2006/main}p'):
                # Extract text from text tags within paragraph
                text_elems = para.iter('{http://schemas.openxmlformats.org/wordprocessingml/2006/main}t')
                para_text = ''.join([elem.text for elem in text_elems if elem.text])
                if para_text.strip():
                    paragraphs.append(para_text)
                    
            return '\n'.join(paragraphs)
    except Exception as e:
        return f"Error reading docx: {e}"

if __name__ == '__main__':
    doc_path = 'c:/laragon/www/kusuma craft/Creative_Brief_Website_Kusuma_PISN_2026.docx'
    text = read_docx(doc_path)
    # Save the text version for easy reference
    with open('c:/laragon/www/kusuma craft/Creative_Brief_Text.txt', 'w', encoding='utf-8') as f:
        f.write(text)
    print("DOCX Text Content Extracted. First 1000 characters:")
    print(text[:1000])
