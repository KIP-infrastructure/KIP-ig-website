# The National Institute of Health Stroke Scale (NIHSS) - 10. Dysarthria - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **The National Institute of Health Stroke Scale (NIHSS) - 10. Dysarthria**

## CodeSystem: The National Institute of Health Stroke Scale (NIHSS) - 10. Dysarthria 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/NIHSS10Dysarthria | *Version*:2.13.0 |
| Active as of 2022-06-23 | *Computable Name*:NIHSS10Dysarthria |

 
The National Institute of Health Stroke Scale (NIHSS) - 10. Dysarthria; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information 

 This Code system is referenced in the content logical definition of the following value sets: 

* [NIHSS10Dysartri](ValueSet-NIHSS10Dysartri.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "NIHSS10Dysarthria",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS10Dysarthria",
  "version" : "2.13.0",
  "name" : "NIHSS10Dysarthria",
  "title" : "The National Institute of Health Stroke Scale (NIHSS) - 10. Dysarthria",
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
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 10. Dysarthria; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information",
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "0",
      "display" : "0",
      "definition" : "Normal."
    },
    {
      "code" : "1",
      "display" : "1",
      "definition" : "Mild-to-moderate dysarthria; patient slurs at least some words and, at worst, can be understood with some difficulty."
    },
    {
      "code" : "2",
      "display" : "2",
      "definition" : "Severe dysarthria; patient's speech is so slurred as to be unintelligible in the absence of or out of proportion to any dysphasia, or is mute/anarthric."
    },
    {
      "code" : "UN",
      "display" : "UN",
      "definition" : "Intubated or other physical barrier, explain:"
    }
  ]
}

```
