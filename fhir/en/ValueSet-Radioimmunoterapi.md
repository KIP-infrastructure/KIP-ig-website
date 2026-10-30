# Radioimmunoterapi - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Radioimmunoterapi**

## ValueSet: Radioimmunoterapi 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/Radioimmunoterapi | *Version*:2.27.1 |
| Active as of 2022-07-18 | *Computable Name*:Radioimmunoterapi |

 
Radioimmunoterapi 

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
  "id" : "Radioimmunoterapi",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/Radioimmunoterapi",
  "version" : "2.27.1",
  "name" : "Radioimmunoterapi",
  "title" : "Radioimmunoterapi",
  "status" : "active",
  "date" : "2022-07-18T00:00:00+02:00",
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
  "description" : "Radioimmunoterapi",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ingen radioimmunoterapi"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ATC",
      "concept" : [{
        "code" : "V10XA53",
        "display" : "Bexxar"
      },
      {
        "code" : "V10XX02",
        "display" : "Zevalin"
      },
      {
        "code" : "V10X",
        "display" : "Anden RIT"
      }]
    }]
  }
}

```
