#!/bin/zsh

# clear console
clear

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
filename="_drafts/${slug}.md"
cat > "$filename" <<EOF
Using the article you just wrote fill in the values for the following YAML template. Make sure to include the --- delimiters. Enclose the title, subtitle and description values in double quotation marks.
---
extends: _layouts.article
timestamp: (pick a random timestamp from the last five years during working hours in the format 2023-12-20 17:32:29)
slug: (article title in slug/kebab case)
title: (insert title of the article)
subtitle: (write an enticing sub title)
description: (write an enticing SEO meta description)
---
I require your expertise as a content writer with a strong proficiency in SEO and fluent English writing skills. Start by constructing an outline for the article, detailing the structure with at least 15 headings and subheadings. The search phrase being targeted is: $title


Now create an article based on the outline you just created.

Article Specifications:

- Content: Original, SEO-optimised, and written in a human-like manner. Avoid plagiarism by writing in your own words.
- Style: Engaging and conversational, suitable for a general audience. This includes using an informal tone, personal pronouns, simplicity, and active voice. Incorporate elements like rhetorical questions, analogies, and metaphors to enhance readability.
- Structure: Use the headings and subheadings from your outline.
- Conclusion and FAQs: End with a conclusion that summarises the main points. Follow it with eight unique FAQs related to the topic, providing concise answers.

SEO Considerations: Ensure the article is keyword-optimised without compromising on quality. Include naturally flowing keywords and phrases relevant to the topic, maintaining a balance between readability and search engine friendliness.

Engagement and Clarity: Write content that is engaging, clear, and easy to follow. Focus on making the article informative and interesting, catering to both human readers and search engines.

EOF

echo "Markdown file created: $filename"
