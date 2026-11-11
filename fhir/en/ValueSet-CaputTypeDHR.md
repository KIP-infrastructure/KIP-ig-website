# Caput type - (DHR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Caput type - (DHR)**

## ValueSet: Caput type - (DHR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/CaputTypeDHR | *Version*:2.27.2 |
| Active as of 2022-11-02 | *Computable Name*:CaputTypeDHR |

 
Caput type - (DHR) 

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
  "id" : "CaputTypeDHR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/CaputTypeDHR",
  "version" : "2.27.2",
  "name" : "CaputTypeDHR",
  "title" : "Caput type - (DHR)",
  "status" : "active",
  "date" : "2022-11-02T00:00:00+02:00",
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
  "description" : "Caput type - (DHR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantComponents",
      "concept" : [{
        "code" : "modular",
        "display" : "Modulært"
      },
      {
        "code" : "adherent",
        "display" : "Fastsiddende (inkl. resurfacing)"
      }]
    }]
  }
}

```
