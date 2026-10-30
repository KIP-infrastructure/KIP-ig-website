# Revision, årsag (DKRR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Revision, årsag (DKRR)**

## ValueSet: Revision, årsag (DKRR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/RevisionAarsagDKRR | *Version*:2.27.1 |
| Active as of 2022-09-21 | *Computable Name*:RevisionAarsagDKRR |

 
Revision, årsag (DKRR) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "RevisionAarsagDKRR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/RevisionAarsagDKRR",
  "version" : "2.27.1",
  "name" : "RevisionAarsagDKRR",
  "title" : "Revision, årsag (DKRR)",
  "status" : "active",
  "date" : "2022-09-21T00:00:00+02:00",
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
  "description" : "Revision, årsag (DKRR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/RevisionCause",
      "concept" : [{
        "code" : "trauma",
        "display" : "Nyt traume"
      },
      {
        "code" : "tunnelwidening",
        "display" : "Tunnelwidening"
      },
      {
        "code" : "suboptimal_graft_tibia",
        "display" : "Suboptimal graft placering i tibia"
      },
      {
        "code" : "suboptimal_graft_femur",
        "display" : "Suboptimal graft placering i femur"
      },
      {
        "code" : "infection",
        "display" : "Infektion"
      },
      {
        "code" : "ligamental_instability",
        "display" : "Anden ligamentær løshed som årsag til ny instabilitet"
      }]
    },
    {
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "UNK",
        "display" : "Ukendt årsag til ny instabilitet"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
