# Dødsårsager [ALD] - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dødsårsager [ALD]**

## ValueSet: Dødsårsager [ALD] 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DoedsaarsagALD | *Version*:2.27.0 |
| Active as of 2022-05-16 | *Computable Name*:DoedsaarsagALD |

 
Dødsårsager [ALD] 

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
  "id" : "DoedsaarsagALD",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DoedsaarsagALD",
  "version" : "2.27.0",
  "name" : "DoedsaarsagALD",
  "title" : "Dødsårsager [ALD]",
  "status" : "active",
  "date" : "2022-05-16T00:00:00+02:00",
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
  "description" : "Dødsårsager [ALD]",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/CauseOfDeath",
      "concept" : [{
        "code" : "early",
        "display" : "Tidlig død (< 1uge efter induktion/reinduktion inkl. relaps)"
      },
      {
        "code" : "hypoplasia",
        "display" : "Død i hypoplasi (>1 uge efter induktion/reinduktion inkl. relaps)"
      },
      {
        "code" : "progressive_disease",
        "display" : "Progressiv sygdom"
      },
      {
        "code" : "progressive_refractory_disease",
        "display" : "Refraktær sygdom"
      },
      {
        "code" : "treatment_related_complete_remission",
        "display" : "Behandlingsrelateret død i komplet remission"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
      "concept" : [{
        "code" : "other",
        "display" : "Død af anden årsag"
      }]
    },
    {
      "system" : "http://terminology.hl7.org/CodeSystem/v2-0532",
      "version" : "3.0.0",
      "concept" : [{
        "code" : "UNK",
        "display" : "Usikker dødsårsag"
      }]
    }]
  }
}

```
