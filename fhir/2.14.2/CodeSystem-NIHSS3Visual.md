# The National Institute of Health Stroke Scale (NIHSS) - 3. Visual - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **The National Institute of Health Stroke Scale (NIHSS) - 3. Visual**

## CodeSystem: The National Institute of Health Stroke Scale (NIHSS) - 3. Visual 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/NIHSS3Visual | *Version*:2.14.2 |
| Active as of 2022-06-23 | *Computable Name*:NIHSS3Visual |

 
The National Institute of Health Stroke Scale (NIHSS) - 3. Visual; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information 

 This Code system is referenced in the content logical definition of the following value sets: 

* [NIHSS3Synsfelt](ValueSet-NIHSS3Synsfelt.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "NIHSS3Visual",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS3Visual",
  "version" : "2.14.2",
  "name" : "NIHSS3Visual",
  "title" : "The National Institute of Health Stroke Scale (NIHSS) - 3. Visual",
  "status" : "active",
  "date" : "2022-06-23T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 3. Visual; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information",
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "0",
      "display" : "0",
      "definition" : "No visual loss."
    },
    {
      "code" : "1",
      "display" : "1",
      "definition" : "Partial hemianopia."
    },
    {
      "code" : "2",
      "display" : "2",
      "definition" : "Complete hemianopia."
    },
    {
      "code" : "3",
      "display" : "3",
      "definition" : "Bilateral hemianopia (blind including cortical blindness)."
    }
  ]
}

```
