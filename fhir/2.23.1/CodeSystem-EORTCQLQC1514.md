# EORTC QLQ-C15-PAL 1-4 - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EORTC QLQ-C15-PAL 1-4**

## CodeSystem: EORTC QLQ-C15-PAL 1-4 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/EORTCQLQC1514 | *Version*:2.23.1 |
| Active as of 2022-07-28 | *Computable Name*:EORTCQLQC1514 |

 
EORTC Palliativ spørgeskema (1-15) grad 1-4. Se https://www.eortc.org/research_field/quality-of-life/ 

 This Code system is referenced in the content logical definition of the following value sets: 

* [EORTC14DPD](ValueSet-EORTC14DPD.md)
* [EORTC24DPD](ValueSet-EORTC24DPD.md)
* [Skala](ValueSet-Skala.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "EORTCQLQC1514",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/EORTCQLQC1514",
  "version" : "2.23.1",
  "name" : "EORTCQLQC1514",
  "title" : "EORTC QLQ-C15-PAL 1-4",
  "status" : "active",
  "date" : "2022-07-28T00:00:00+02:00",
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
  "description" : "EORTC Palliativ spørgeskema (1-15) grad 1-4. Se https://www.eortc.org/research_field/quality-of-life/",
  "caseSensitive" : false,
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
    "code" : "grade_1",
    "display" : "1. Slet ikke",
    "definition" : "1. Slet ikke"
  },
  {
    "code" : "grade_2",
    "display" : "2. Lidt",
    "definition" : "2. Lidt"
  },
  {
    "code" : "grade_3",
    "display" : "3. En del",
    "definition" : "3. En del"
  },
  {
    "code" : "grade_4",
    "display" : "4. Meget",
    "definition" : "4. Meget"
  }]
}

```
