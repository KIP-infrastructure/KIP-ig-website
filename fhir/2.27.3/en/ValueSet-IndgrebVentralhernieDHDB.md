# Indgreb - ventralhernie (DHDB) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Indgreb - ventralhernie (DHDB)**

## ValueSet: Indgreb - ventralhernie (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/IndgrebVentralhernieDHDB | *Version*:2.27.3 |
| Active as of 2022-07-20 | *Computable Name*:IndgrebVentralhernieDHDB |

 
Indgreb - ventralhernie (DHDB) 

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
  "id" : "IndgrebVentralhernieDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/IndgrebVentralhernieDHDB",
  "version" : "2.27.3",
  "name" : "IndgrebVentralhernieDHDB",
  "title" : "Indgreb - ventralhernie (DHDB)",
  "status" : "active",
  "date" : "2022-07-20T00:00:00+02:00",
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
  "description" : "Indgreb - ventralhernie (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "open",
        "display" : "Åben"
      },
      {
        "code" : "combined_open",
        "display" : "Kombineret åben"
      },
      {
        "code" : "laparoscopic",
        "display" : "Laparoskopisk"
      },
      {
        "code" : "converted_open",
        "display" : "Laparoskopisk konverteret til åben"
      },
      {
        "code" : "converted_open_to_lap",
        "display" : "Åben konverteret til laparoskopisk"
      },
      {
        "code" : "robot_laparoscopic",
        "display" : "Robot-assisteret laparoskopisk"
      },
      {
        "code" : "robot_converted_laparoscopic",
        "display" : "Robot-assisteret laparoskopisk konverteret til laparoskopisk"
      },
      {
        "code" : "robot_converted_open",
        "display" : "Robot-assisteret laparoskopisk konverteret til åben"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet indgreb"
      }]
    }]
  }
}

```
