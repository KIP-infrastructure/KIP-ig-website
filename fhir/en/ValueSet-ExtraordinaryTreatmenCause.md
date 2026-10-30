# Ekstra behandling - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Ekstra behandling**

## ValueSet: Ekstra behandling 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ExtraordinaryTreatmenCause | *Version*:2.27.1 |
| Active as of 2022-07-14 | *Computable Name*:ExtraordinaryTreatmenCause |

 
Årsag for uplanlagt ekstra behandling [DAMYDA] 

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
  "id" : "ExtraordinaryTreatmenCause",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ExtraordinaryTreatmenCause",
  "version" : "2.27.1",
  "name" : "ExtraordinaryTreatmenCause",
  "title" : "Ekstra behandling",
  "status" : "active",
  "date" : "2022-07-14T00:00:00+02:00",
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
  "description" : "Årsag for uplanlagt ekstra behandling [DAMYDA]",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentCause",
      "concept" : [{
        "code" : "toxicity",
        "display" : "Toksicitet"
      },
      {
        "code" : "insufficient_response",
        "display" : "Utilstrækkeligt respons"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "not_performed",
        "display" : "Pt. har ikke fået uplanlagt behandling"
      }]
    }]
  }
}

```
