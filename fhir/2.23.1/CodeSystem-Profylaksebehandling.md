# Profylaksebehandling - KIP Infrastructure v2.23.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Profylaksebehandling**

## CodeSystem: Profylaksebehandling 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/Profylaksebehandling | *Version*:2.23.1 |
| Active as of 2024-06-24 | *Computable Name*:Profylaksebehandling |

 
Profylaksebehandling 

 This Code system is referenced in the content logical definition of the following value sets: 

* [InitialRespons](ValueSet-InitialRespons.md)
* [VarigRespons](ValueSet-VarigRespons.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "Profylaksebehandling",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/Profylaksebehandling",
  "version" : "2.23.1",
  "name" : "Profylaksebehandling",
  "title" : "Profylaksebehandling",
  "status" : "active",
  "date" : "2024-06-24T00:00:00+02:00",
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
  "description" : "Profylaksebehandling",
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
    "code" : "yesfreeOfTreatment",
    "display" : "Ja, og patienten genoptog ikke sin vanlige profylaksebehandling"
  },
  {
    "code" : "yesagainprofylakse",
    "display" : "Ja, men patienten har genoptaget profylaksebehandling"
  },
  {
    "code" : "nofreeOfTreatment",
    "display" : "Nej, og patienten har været behandlingsfri indtil nu"
  },
  {
    "code" : "noagainprofylakse",
    "display" : "Nej, men patienten er genoptaget profylakse"
  }]
}

```
