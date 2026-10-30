# Årsag til ændret behandlingsplan DCCG - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Årsag til ændret behandlingsplan DCCG**

## ValueSet: Årsag til ændret behandlingsplan DCCG 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/BehandlinsplanAendretAarsagDCCG | *Version*:2.27.1 |
| Active as of 2022-09-07 | *Computable Name*:BehandlinsplanAendretAarsagDCCG |

 
Årsag til ændret behandlingsplan DCCG 

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
  "id" : "BehandlinsplanAendretAarsagDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/BehandlinsplanAendretAarsagDCCG",
  "version" : "2.27.1",
  "name" : "BehandlinsplanAendretAarsagDCCG",
  "title" : "Årsag til ændret behandlingsplan DCCG",
  "status" : "active",
  "date" : "2022-09-07T00:00:00+02:00",
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
  "description" : "Årsag til ændret behandlingsplan DCCG",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureNotCompleted",
      "concept" : [{
        "code" : "disease_progression",
        "display" : "Sygdomsprogression"
      },
      {
        "code" : "disease_regression",
        "display" : "Sygdomsregression"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden årsag"
      }]
    }]
  }
}

```
