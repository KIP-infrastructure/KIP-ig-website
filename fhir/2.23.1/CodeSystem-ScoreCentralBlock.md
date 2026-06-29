# Score ved central blokade - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Score ved central blokade**

## CodeSystem: Score ved central blokade 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ScoreCentralBlock | *Version*:2.23.1 |
| Active as of 2022-06-09 | *Computable Name*:ScoreCentralBlockCS |

 
Regional score ved anlæg af central nerveblokade 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ScoreCentralBlock](ValueSet-ScoreCentralBlock.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ScoreCentralBlock",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ScoreCentralBlock",
  "version" : "2.23.1",
  "name" : "ScoreCentralBlockCS",
  "title" : "Score ved central blokade",
  "status" : "active",
  "date" : "2022-06-09T00:00:00+02:00",
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
  "description" : "Regional score ved anlæg af central nerveblokade",
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
    "code" : "attempt_LE3",
    "display" : "Apply attemted <=3",
    "definition" : "Forsøgt anlagt antal <=3 gange"
  },
  {
    "code" : "attempt_GT3",
    "display" : "Apply attempted >3",
    "definition" : "Forsøgt anlagt >3 gange"
  },
  {
    "code" : "epidural_on_arr",
    "display" : "Epidural catheter applied on arrival",
    "definition" : "Ankommet med anlagt epidural kateter"
  },
  {
    "code" : "abandon",
    "display" : "Abandonned",
    "definition" : "Opgivet"
  }]
}

```
