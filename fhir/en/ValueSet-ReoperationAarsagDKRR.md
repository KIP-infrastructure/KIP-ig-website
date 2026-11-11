# Reoperation årsager (DKRR) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Reoperation årsager (DKRR)**

## ValueSet: Reoperation årsager (DKRR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ReoperationAarsagDKRR | *Version*:2.27.3 |
| Active as of 2022-06-01 | *Computable Name*:ReoperationAarsagDKRR |

 
Årsager til reoperation indenfor 1 år (DKRR) 

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
  "id" : "ReoperationAarsagDKRR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ReoperationAarsagDKRR",
  "version" : "2.27.3",
  "name" : "ReoperationAarsagDKRR",
  "title" : "Reoperation årsager (DKRR)",
  "status" : "active",
  "date" : "2022-06-01T00:00:00+02:00",
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
  "description" : "Årsager til reoperation indenfor 1 år (DKRR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ReoperationCause",
      "concept" : [{
        "code" : "infection",
        "display" : "Infektion"
      },
      {
        "code" : "movement_restriction",
        "display" : "Bevægelsesindskrænkning (artrofibrose)"
      },
      {
        "code" : "meniscus_damage",
        "display" : "Menisk skade"
      },
      {
        "code" : "cartilage_damage",
        "display" : "Brusk skade"
      },
      {
        "code" : "implant_removed",
        "display" : "Implantat fjernet"
      },
      {
        "code" : "cicatricial_tissue",
        "display" : "Arvæv/Cyklop dannelse"
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
