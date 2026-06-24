# The National Institute of Health Stroke Scale (NIHSS) - 1b. Level of Consciousness: Questions - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **The National Institute of Health Stroke Scale (NIHSS) - 1b. Level of Consciousness: Questions**

## CodeSystem: The National Institute of Health Stroke Scale (NIHSS) - 1b. Level of Consciousness: Questions 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/NIHSS1bLOC | *Version*:2.21.0 |
| Active as of 2022-06-23 | *Computable Name*:NIHSS1bLOC |

 
The National Institute of Health Stroke Scale (NIHSS) - 1b. Level of Consciousness: Questions; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information 

 This Code system is referenced in the content logical definition of the following value sets: 

* [NIHSS1bBevidsthedsniveau](ValueSet-NIHSS1bBevidsthedsniveau.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "NIHSS1bLOC",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/NIHSS1bLOC",
  "version" : "2.21.0",
  "name" : "NIHSS1bLOC",
  "title" : "The National Institute of Health Stroke Scale (NIHSS) - 1b. Level of Consciousness: Questions",
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
  "description" : "The National Institute of Health Stroke Scale (NIHSS) - 1b. Level of Consciousness: Questions; Link: https://www.ninds.nih.gov/stroke-scales-and-related-information",
  "content" : "complete",
  "count" : 3,
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
    "definition" : "Answers both questions correctly."
  },
  {
    "code" : "1",
    "display" : "1",
    "definition" : "Answers one question correctly."
  },
  {
    "code" : "2",
    "display" : "2",
    "definition" : "Answers neither question correctly."
  }]
}

```
