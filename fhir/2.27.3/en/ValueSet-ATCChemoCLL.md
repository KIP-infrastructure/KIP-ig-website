# ATC_CLL_kemo - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ATC_CLL_kemo**

## ValueSet: ATC_CLL_kemo 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ATCChemoCLL | *Version*:2.27.3 |
| Active as of 2022-07-13 | *Computable Name*:ATCChemoCLL |

 
ATC koder kemoterapi - [CLL] 

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
  "id" : "ATCChemoCLL",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ATCChemoCLL",
  "version" : "2.27.3",
  "name" : "ATCChemoCLL",
  "title" : "ATC_CLL_kemo",
  "status" : "active",
  "date" : "2022-07-13T00:00:00+02:00",
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
  "description" : "ATC koder kemoterapi - [CLL]",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ingen kemoterapi"
      },
      {
        "code" : "other",
        "display" : "Andet (incl behandling for evt. anden malignitet)"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ATC",
      "concept" : [{
        "code" : "L01BB05",
        "display" : "Fludarabin"
      },
      {
        "code" : "L01AA01",
        "display" : "Cyklofosmamid"
      },
      {
        "code" : "L01AA02",
        "display" : "Chlorambucil"
      },
      {
        "code" : "L01AA09",
        "display" : "Bendamustin"
      }]
    }]
  }
}

```
