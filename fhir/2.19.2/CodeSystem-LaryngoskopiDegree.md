# Laryngoskopi grad - KIP Infrastructure v2.19.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Laryngoskopi grad**

## CodeSystem: Laryngoskopi grad 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/LaryngoskopiDegree | *Version*:2.19.2 |
| Active as of 2022-06-09 | *Computable Name*:LaryngoskopiDegree |

 
Bedst opnåede laryngoskopigrad ved direkte laryngoskopi efter Cormack & Lehane 

 This Code system is referenced in the content logical definition of the following value sets: 

* [LaryngoskopiDegree](ValueSet-LaryngoskopiDegree.md)
* [LaryngoskopiDegree2026](ValueSet-LaryngoskopiDegree2026.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "LaryngoskopiDegree",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/LaryngoskopiDegree",
  "version" : "2.19.2",
  "name" : "LaryngoskopiDegree",
  "title" : "Laryngoskopi grad",
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
  "description" : "Bedst opnåede laryngoskopigrad ved  direkte laryngoskopi efter Cormack & Lehane",
  "content" : "complete",
  "count" : 5,
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
    "code" : "degree1",
    "display" : "Grad 1:",
    "definition" : "Grad 1: Stemmebånd kan visualiseres i fuld længde"
  },
  {
    "code" : "degree2",
    "display" : "Grad 2:",
    "definition" : "Grad 2: 1/3 af stemmebåndene kan visualiseres"
  },
  {
    "code" : "degree3",
    "display" : "Grad 3:",
    "definition" : "Grad 3: Epiglottis men ikke stemmebånd kan visualiseres"
  },
  {
    "code" : "degree4",
    "display" : "Grad 4:",
    "definition" : "Grad 4: Epiglottis kan ikke visualiseres"
  },
  {
    "code" : "noattempt",
    "display" : "Ikke forsøgt",
    "definition" : "Direkte laryngoskopi ikke forsøgt",
    "property" : [{
      "code" : "comment",
      "valueString" : "Removed"
    },
    {
      "code" : "effectiveDate",
      "valueDateTime" : "2026-03-04T00:00:00+01:00"
    },
    {
      "code" : "status",
      "valueCode" : "retired"
    },
    {
      "code" : "inactive",
      "valueBoolean" : true
    }]
  }]
}

```
