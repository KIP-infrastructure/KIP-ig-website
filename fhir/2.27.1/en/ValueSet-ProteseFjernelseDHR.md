# Protese fjernelse (DHR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Protese fjernelse (DHR)**

## ValueSet: Protese fjernelse (DHR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ProteseFjernelseDHR | *Version*:2.27.1 |
| Active as of 2022-11-08 | *Computable Name*:ProteseFjernelseDHR |

 
Protese fjernelse (DHR) 

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
  "id" : "ProteseFjernelseDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ProteseFjernelseDHR",
  "version" : "2.27.1",
  "name" : "ProteseFjernelseDHR",
  "title" : "Protese fjernelse (DHR)",
  "status" : "active",
  "date" : "2022-11-08T00:00:00+02:00",
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
  "description" : "Protese fjernelse (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "cement_spacer",
        "display" : "Til cementspacer"
      },
      {
        "code" : "girdlestone",
        "display" : "Til Girdlestone status"
      }]
    }]
  }
}

```
