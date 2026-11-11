# Håndtering af lipom (DHDB) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Håndtering af lipom (DHDB)**

## ValueSet: Håndtering af lipom (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LipomHandlingDHDB | *Version*:2.27.2 |
| Active as of 2024-09-10 | *Computable Name*:LipomHandlingDHDB |

 
Håndtering af lipom (DHDB) 

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
  "id" : "LipomHandlingDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LipomHandlingDHDB",
  "version" : "2.27.2",
  "name" : "LipomHandlingDHDB",
  "title" : "Håndtering af lipom (DHDB)",
  "status" : "active",
  "date" : "2024-09-10T00:00:00+02:00",
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
  "description" : "Håndtering af lipom (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentType",
      "concept" : [{
        "code" : "retrahere",
        "display" : "Retraheret"
      },
      {
        "code" : "exidere",
        "display" : "Exideret"
      },
      {
        "code" : "in_situ",
        "display" : "Efterladt in situ"
      }]
    }]
  }
}

```
