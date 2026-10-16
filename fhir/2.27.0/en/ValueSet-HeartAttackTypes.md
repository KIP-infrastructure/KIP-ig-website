# Hjertestop type - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Hjertestop type**

## ValueSet: Hjertestop type 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/HeartAttackTypes | *Version*:2.27.0 |
| Active as of 2022-06-07 | *Computable Name*:HeartAttackTypes |

 
Forskellige arter af hjertestop / fejl 

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
  "id" : "HeartAttackTypes",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/HeartAttackTypes",
  "version" : "2.27.0",
  "name" : "HeartAttackTypes",
  "title" : "Hjertestop type",
  "status" : "active",
  "date" : "2022-06-07T00:00:00+02:00",
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
  "description" : "Forskellige arter af hjertestop / fejl",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Complications",
      "concept" : [{
        "code" : "segment_elevation_myocardial_infarction",
        "display" : "STEMI"
      },
      {
        "code" : "bundle_branch_block_myocardial_infarction",
        "display" : "BBBMI"
      },
      {
        "code" : "non_segment_elevation_myocardial_infarction",
        "display" : "NSTEMI"
      },
      {
        "code" : "unstable_agina",
        "display" : "UAP"
      },
      {
        "code" : "rulled_out_heart_attack",
        "display" : "Ikke AKS"
      }]
    }]
  }
}

```
