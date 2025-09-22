# Hero Image Generation System Prompt

## Context
This system prompt is extracted from the `generateHeroImagesForSite` function in `internal/chatbottoolbox/tools/hydephp.go`. It's used to generate hero banner images for website pages using AI image generation.

## System Prompt Template

```
Generate a clean, modern, brand-consistent hero banner image illustrating: {TITLE_WORDS}. The image should be visually appealing, high contrast, and suitable as a wide hero section background.
```

## Placeholders

- `{TITLE_WORDS}`: The title or subject matter for the hero image, derived from the page title or filename (with hyphens replaced by spaces)

## Usage

This prompt is used in the hero image generation process where:

1. The filename is processed to extract meaningful title words
2. The title words are injected into the prompt template
3. The complete prompt is sent to the Gemini image generation model
4. The generated image is saved as a hero banner for the website

## Implementation Details

- **Model**: Uses `gemini-2.5-flash-image-preview` model
- **Timeout**: 45 seconds per image generation
- **Output**: PNG format hero banner images
- **Context**: Generated images are used as wide hero section backgrounds in HydePHP static sites

## Example Usage

If the filename is `about-us_hero_img.png`, then:
- `{TITLE_WORDS}` becomes `"about us"`
- Complete prompt: `"Generate a clean, modern, brand-consistent hero banner image illustrating: about us. The image should be visually appealing, high contrast, and suitable as a wide hero section background."`