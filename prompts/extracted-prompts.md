# Extracted System Prompts from handlers.go and helpers.go

## Page Requirements Prompt (from handlers.go)

### Context
This prompt is from a commented-out function `buildPageRequirementsPrompt` in `internal/server/handlers.go`. It was designed to generate page requirements sections for website creation prompts.

### Template

```
SPECIFIC PAGE REQUIREMENTS:
- {PAGE_NAME} page must include: sections ({SECTIONS}), layout ({LAYOUT}), components ({COMPONENTS}), 
  Configuration: {CONFIG}

SECTION SPECIFICATIONS:
- Hero sections: Use full-width background with centered content and primary CTA button
- Service cards: Include icon, title, description, features list, and "Learn More" button
- Testimonials: Use card layout with customer photo, rating stars, quote, and name
- CTAs: Use gradient backgrounds with contrasting text and prominent buttons
- Ensure all components are responsive and accessible
```

### Placeholders

- `{PAGE_NAME}`: The name of the page (e.g., "home", "about", "services")
- `{SECTIONS}`: Comma-separated list of required sections
- `{LAYOUT}`: Specific layout type for the page
- `{COMPONENTS}`: Comma-separated list of required components
- `{CONFIG}`: Configuration object for the page

### Implementation Details

- **Source**: `internal/server/handlers.go:1177-1216`
- **Status**: Commented out (not currently active)
- **Purpose**: Generate structured page requirements for website creation
- **Format**: String builder that concatenates multiple requirement sections

---

## Pipeline Prompts (from helpers.go)

### 1. Chained Summarization Prompts

#### Extract Key Points
```
Extract the key points from the following text:

{INPUT}
```

#### Create Summary
```
Create a concise summary from these key points:

{INPUT}
```

#### Executive Summary
```
Write a one-paragraph executive summary:

{INPUT}
```

### 2. Multi-Perspective Analysis Prompts

#### Technical Analysis
```
Analyze the technical aspects of:

{INPUT}
```

#### Business Analysis
```
Analyze the business implications of:

{INPUT}
```

#### UX Analysis
```
Analyze the user experience aspects of:

{INPUT}
```

#### Risk Analysis
```
Identify potential risks and challenges in:

{INPUT}
```

### 3. Content Generation Pipeline Prompts

#### Research Phase
```
Research and outline key points about: {INPUT}
```

#### Structure Phase
```
Based on this research, create a detailed article structure:

{INPUT}
```

#### Content Generation Phase
```
Generate the full article content based on this structure:

{INPUT}
```

### 4. Batch Generation Prompt Template (from helpers.go)

#### Context
This template is used in the `generateBatchWithReference` function to create prompts for batch page generation.

#### Template
```
{COMPONENTS_PROMPT}

{BATCH_PROMPT}

SITE CONTEXT:
- site_id: {SITE_UUID}
- PROJECT_REFERENCE: {SITE_UUID}

TARGET PAGES (generate ONLY these in this batch):
- {PAGE_NAMES}

TOOL CALL REQUIRED:
Call generateMultipleHydePages with:
- site_id = "{SITE_UUID}"
- page_type = "blade"
- delimiter = "==="
- delimited_content = the concatenated pages above (with PAGE: headers)
```

### Placeholders

- `{INPUT}`: Dynamic input content that gets passed between pipeline steps
- `{COMPONENTS_PROMPT}`: Content from available-components-prompt.txt
- `{BATCH_PROMPT}`: Content from the specified batch prompt file
- `{SITE_UUID}`: The site UUID for context
- `{PAGE_NAMES}`: Newline-separated list of page names to generate

### Implementation Details

- **Source**: `internal/services/googleai/helpers.go`
- **Functions**: 
  - `ChainedSummarization` (lines 607-632)
  - `MultiPerspectiveAnalysis` (lines 641-672)
  - `ContentGenerationPipeline` (lines 678-705)
  - `generateBatchWithReference` (lines 1167-1220)
- **Usage**: Pipeline processing, parallel analysis, content generation workflows
- **Parameters**: Temperature, maxOutputTokens, and tool configurations vary by prompt type

### Pipeline Features

- **Sequential Processing**: Each step feeds output to next step
- **Parallel Processing**: Multiple perspectives analyzed simultaneously  
- **Tool Integration**: Specific tools enabled for different steps
- **Dynamic Replacement**: {{INPUT}} placeholders replaced with step outputs
- **Error Handling**: Pipeline stops on step failures with detailed error reporting