# Intubation - KIP Infrastructure v2.21.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Intubation**

## CodeSystem: Intubation 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Intubation | *Version*:2.21.0 |
| Active as of 2022-06-09 | *Computable Name*:IntubationCS |

 
Resultat af luftvejshåndtering vha. intubation 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Intubation](ValueSet-Intubation.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Intubation",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Intubation",
  "version" : "2.21.0",
  "name" : "IntubationCS",
  "title" : "Intubation",
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
  "description" : "Resultat af luftvejshåndtering vha. intubation",
  "content" : "complete",
  "count" : 6,
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
    "code" : "max2_dir",
    "display" : "Max 2 attempts, final by direct laryngoscopy",
    "definition" : "Højest 2 forsøg, seneste ved direkte laryngoskopi"
  },
  {
    "code" : "max2_video",
    "display" : "Max 2 attempts, final by videolaryngoscopy",
    "definition" : "Højest 2 forsøg, seneste ved videolaryngoskopi"
  },
  {
    "code" : "max2_flex",
    "display" : "Max 2 attempts, final by flexible laryngoscopy",
    "definition" : "Højest 2 forsøg, seneste ved fleksibel skopi"
  },
  {
    "code" : "max2_other",
    "display" : "Max 2 attempts, final by different method than above mentioned",
    "definition" : "Højest 2 forsøg seneste ved andet end ovennævnte metoder"
  },
  {
    "code" : "3_or_more",
    "display" : "3 or more attempts method regardless",
    "definition" : "3 forsøg eller flere uanset metode"
  },
  {
    "code" : "abandon",
    "display" : "Intubation abandonned",
    "definition" : "Intubation opgivet"
  }]
}

```
