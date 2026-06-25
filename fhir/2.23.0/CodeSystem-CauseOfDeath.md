# Cause of death - KIP Infrastructure v2.23.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Cause of death**

## CodeSystem: Cause of death 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/CauseOfDeath | *Version*:2.23.0 |
| Active as of 2022-07-12 | *Computable Name*:CauseOfDeath |

 
Cause of death 

 This Code system is referenced in the content logical definition of the following value sets: 

* [DoedsaarsagALD](ValueSet-DoedsaarsagALD.md)
* [DoedsaarsagCLL](ValueSet-DoedsaarsagCLL.md)
* [DoedsaarsagDAMYDA](ValueSet-DoedsaarsagDAMYDA.md)
* [DoedsaarsagLYFO](ValueSet-DoedsaarsagLYFO.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "CauseOfDeath",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/CauseOfDeath",
  "version" : "2.23.0",
  "name" : "CauseOfDeath",
  "title" : "Cause of death",
  "status" : "active",
  "date" : "2022-07-12T00:00:00+02:00",
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
  "description" : "Cause of death",
  "content" : "complete",
  "count" : 13,
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
    "code" : "early",
    "display" : "Early death",
    "definition" : "Early death (<1 week after induction/reinduction incl. relapse)"
  },
  {
    "code" : "hypoplasia",
    "display" : "Hypoplasia",
    "definition" : "Hypoplasia (>1 week after induction/reinduction incl. relapse)"
  },
  {
    "code" : "progressive_disease",
    "display" : "Progressive disease",
    "definition" : "Progressive disease"
  },
  {
    "code" : "progressive_refractory_disease",
    "display" : "Progressive or refractory disease",
    "definition" : "Progressive or refractory disease"
  },
  {
    "code" : "treatment_related_complete_remission",
    "display" : "Treatment related (complete remission)",
    "definition" : "Treatment related (complete remission)"
  },
  {
    "code" : "cll",
    "display" : "CLL",
    "definition" : "CLL"
  },
  {
    "code" : "uremia",
    "display" : "Uremia",
    "definition" : "Uremia / Uræmi / SNOMED-CT: 44730006"
  },
  {
    "code" : "infection",
    "display" : "Infectious disease",
    "definition" : "Infectious disease / Infektionssygdom / SNOMED-CT: 40733004"
  },
  {
    "code" : "bleeding",
    "display" : "Bleeding",
    "definition" : "Bleeding / Blødning / SNOMED-CT: 50960005"
  },
  {
    "code" : "therapy_related_progression",
    "display" : "Terapirelateret dødsfald MED sygdomsprogression",
    "definition" : "Terapirelateret dødsfald MED sygdomsprogression"
  },
  {
    "code" : "therapy_related",
    "display" : "Terapirelateret dødsfald uden sygdomsprogression",
    "definition" : "Terapirelateret dødsfald uden sygdomsprogression"
  },
  {
    "code" : "other_complete_remissiong",
    "display" : "Anden årsag, død i komplet remission (CR)",
    "definition" : "Anden årsag, død i komplet remission (CR)"
  },
  {
    "code" : "other_not_complete_remissiong",
    "display" : "Anden årsag, IKKE i komplet remision (CR) ved død",
    "definition" : "Anden årsag, IKKE i komplet remision (CR) ved død"
  }]
}

```
