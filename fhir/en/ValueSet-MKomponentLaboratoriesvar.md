# M-komponent; laboratoriesvar - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **M-komponent; laboratoriesvar**

## ValueSet: M-komponent; laboratoriesvar 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MKomponentLaboratoriesvar | *Version*:2.27.0 |
| Active as of 2022-10-05 | *Computable Name*:MKomponentLaboratoriesvar |

 
M-komponent; laboratoriesvar 

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
  "id" : "MKomponentLaboratoriesvar",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MKomponentLaboratoriesvar",
  "version" : "2.27.0",
  "name" : "MKomponentLaboratoriesvar",
  "title" : "M-komponent; laboratoriesvar",
  "status" : "active",
  "date" : "2022-10-05T00:00:00+02:00",
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
  "description" : "M-komponent; laboratoriesvar",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Der foreligger ikke noget lab. svar"
      },
      {
        "code" : "unspecified",
        "display" : "Lab. svar angiver ikke en specifik type"
      },
      {
        "code" : "specified",
        "display" : "Lab. svar foreligger, med en specifik M-komponent type"
      }]
    }]
  }
}

```
