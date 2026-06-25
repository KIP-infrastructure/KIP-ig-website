# The National Institute of Health Stroke Scale (NIHSS) - 10. Dysarthria - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **The National Institute of Health Stroke Scale (NIHSS) - 10. Dysarthria**

## CodeSystem: The National Institute of Health Stroke Scale (NIHSS) - 10. Dysarthria 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/NIHSS10Dysarthria | *Version*:2.23.0 |
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
  "version" : "2.23.0",
  "name" : "NIHSS10Dysarthria",
  "title" : "The National Institute of Health Stroke Scale (NIHSS) - 10. Dysarthria",
  "status" : "active",
  "date" : "2022-06-23T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 10. Dysarthria; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information",
  "content" : "complete",
  "count" : 4,
  "property" : [{
    "code" : "comment",
    "uri" : "http://hl7.org/fhir/concept-properties#comment",
    "description" : "A string that provides additional detail pertinent to the use or understanding of the concept",
    "type" : "string"
  },
  {
    "code" : "effectiveDate",
    "uri" : "http://hl7.org/fhir/concept-properties#effectiveDate",
    "description" : "The date at which the concept status was last changed",
    "type" : "dateTime"
  },
  {
    "code" : "status",
    "uri" : "http://hl7.org/fhir/concept-properties#status",
    "description" : "A code that indicates the status of the concept. Typical values are active, experimental, deprecated, and retired",
    "type" : "code"
  },
  {
    "code" : "inactive",
    "uri" : "http://hl7.org/fhir/concept-properties#inactive",
    "description" : "True if the concept is not considered active - e.g. not a valid concept any more. Property type is boolean, default value is false. Note that the status property may also be used to indicate that a concept is inactive",
    "type" : "boolean"
  }],
  "concept" : [{
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
  }]
}

```
