# Mulig-Vanskelig-Umulig - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mulig-Vanskelig-Umulig**

## ValueSet: Mulig-Vanskelig-Umulig 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MuligVanskeligUmulig | *Version*:2.27.1 |
| Active as of 2022-06-14 | *Computable Name*:MuligVanskeligUmulig |

 
Vurdering af en given behandling 

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
  "id" : "MuligVanskeligUmulig",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MuligVanskeligUmulig",
  "version" : "2.27.1",
  "name" : "MuligVanskeligUmulig",
  "title" : "Mulig-Vanskelig-Umulig",
  "status" : "active",
  "date" : "2022-06-14T00:00:00+02:00",
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
  "description" : "Vurdering af en given behandling",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MuligVanskeligUmulig",
      "concept" : [{
        "code" : "mulig",
        "display" : "Mulig"
      },
      {
        "code" : "vanskelig",
        "display" : "Vanskelig"
      },
      {
        "code" : "umulig",
        "display" : "Umulig"
      }]
    }]
  }
}

```
