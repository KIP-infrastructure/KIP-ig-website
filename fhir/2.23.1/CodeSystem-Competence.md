# Fagligt niveau - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Fagligt niveau**

## CodeSystem: Fagligt niveau 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Competence | *Version*:2.23.1 |
| Active as of 2022-05-31 | *Computable Name*:CompetenceCS |

 
Udførende personales faglighed 

 This Code system is referenced in the content logical definition of the following value sets: 

* [Competence](ValueSet-Competence.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Competence",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Competence",
  "version" : "2.23.1",
  "name" : "CompetenceCS",
  "title" : "Fagligt niveau",
  "status" : "active",
  "date" : "2022-05-31T00:00:00+02:00",
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
  "description" : "Udførende personales faglighed",
  "content" : "complete",
  "count" : 9,
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
    "code" : "nursegeneral",
    "display" : "Nurse (general)",
    "definition" : "Sygeplejerske generelt",
    "concept" : [{
      "code" : "nu_anesthesia",
      "display" : "Anesthesia nurse",
      "definition" : "Sygeplejerske med specialuddannelse i anæstesi"
    },
    {
      "code" : "nu_anesthesia_edu",
      "display" : "Nurse (education)",
      "definition" : "Sygeplejerske under uddannelse til anæstesisygeplejerske"
    },
    {
      "code" : "nu_recovery",
      "display" : "Nurse (recovey)",
      "definition" : "Opvågningsygeplejerske"
    }]
  },
  {
    "code" : "anesthesiologist",
    "display" : "Anesthesia specialist",
    "definition" : "Læge som har specialuddannelse i anæstesiologi"
  },
  {
    "code" : "doc",
    "display" : "Doctor",
    "definition" : "Læge som ikke er under uddannelse til speciallæge i anæstesiologi"
  },
  {
    "code" : "anae_edu",
    "display" : "Medical education",
    "definition" : "Uddannelsesforløb",
    "concept" : [{
      "code" : "doc_edu_anae_main",
      "display" : "Main medical education",
      "definition" : "Læge som er i hoveduddannelsesforløb til speciallæge i anæstesiologi"
    },
    {
      "code" : "doc_edu_anae_intro",
      "display" : "Medical introductional education",
      "definition" : "Læge som er i introduktionsforløb til anæstesiologi"
    }]
  }]
}

```
