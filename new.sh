#!/bin/zsh

# Function to create a slug from a string
slugify() {
	echo "$1" | tr '[:upper:]' '[:lower:]' | sed 's/[^a-zA-Z0-9]/-/g' | sed 's/--*/-/g'
}

# Check if an argument is provided
if [ "$#" -ne 1 ]; then
	echo "Usage: $0 'Article Title'"
	exit 1
fi

# Convert title to slug
title="$1"
slug=$(slugify "$title")

# Create markdown file with a basic template
filename="${slug}.md"
cat > "$filename" <<EOF
Using the article you just wrote fill in the values for the following YAML template.
---
extends: _layouts.article
timestamp:  (insert current timestamp in format 2023-12-20 17:32:29 using GMT timezone)
slug: (article title in slug/kebab case)
title:  (insert title of the article)
subtitle: (write an enticing sub title)
description: (write an enticing SEO meta description)
---
I require your expertise as a content writer with a strong proficiency in SEO and fluent English writing skills. Your task is to create an article following these guidelines:

1. **Outline Development**: Start by constructing two tables. The first table will serve as an outline for the article, detailing the structure with at least 15 headings and subheadings, including H1, H2, H3, and H4 tags. The second table will contain the article itself.

2. **Article Specifications**:
   - **Length**: Approximately 2000 words.
   - **Content**: Original, SEO-optimized, and written in a human-like manner. Avoid plagiarism by writing in your own words.
   - **Style**: Engaging and conversational, suitable for a general audience. This includes using an informal tone, personal pronouns, simplicity, and active voice. Incorporate elements like rhetorical questions, analogies, and metaphors to enhance readability.
   - **Structure**: Use the headings and subheadings from your outline. Bold the headings using Markdown language.
   - **Spelling**: Use British English spellings not American.

3. **SEO Considerations**: Ensure the article is keyword-optimized without compromising on quality. Include naturally flowing keywords and phrases relevant to the topic, maintaining a balance between readability and search engine friendliness.

4. **Engagement and Clarity**: Write content that is engaging, clear, and easy to follow. Focus on making the article informative and interesting, catering to both human readers and search engines.

5. **Conclusion and FAQs**: End with a conclusion that summarizes the main points. Follow it with eight unique FAQs related to the topic, providing concise answers.

6. **Formatting**: Bold the title and all headings. Use appropriate tags for the headings to maintain a clear hierarchy. Output in a Markdown code text block.

Please begin by writing an article on the provided topic: $title.

EOF

echo "Markdown file created: $filename"
