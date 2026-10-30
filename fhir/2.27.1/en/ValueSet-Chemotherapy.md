# Kemoterapi - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Kemoterapi**

## ValueSet: Kemoterapi 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Chemotherapy | *Version*:2.27.1 |
| Active as of 2022-07-11 | *Computable Name*:Chemotherapy |

 
Hvilken art kemoterapi 

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
  "id" : "Chemotherapy",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Chemotherapy",
  "version" : "2.27.1",
  "name" : "Chemotherapy",
  "title" : "Kemoterapi",
  "status" : "active",
  "date" : "2022-07-11T00:00:00+02:00",
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
  "description" : "Hvilken art kemoterapi",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentIntention",
      "concept" : [{
        "code" : "curative",
        "display" : "Kurativ intenderet"
      },
      {
        "code" : "palliative",
        "display" : "Pallitativ"
      },
      {
        "code" : "semiintensiv",
        "display" : "Semiintensiv"
      }]
    }]
  }
}

```
