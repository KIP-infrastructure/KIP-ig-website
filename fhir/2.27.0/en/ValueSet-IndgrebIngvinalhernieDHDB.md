# Indgreb - ingvinalhernie (DHDB) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Indgreb - ingvinalhernie (DHDB)**

## ValueSet: Indgreb - ingvinalhernie (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/IndgrebIngvinalhernieDHDB | *Version*:2.27.0 |
| Active as of 2022-07-20 | *Computable Name*:IndgrebIngvinalhernieDHDB |

 
Indgreb - ingvinalhernie (DHDB) 

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
  "id" : "IndgrebIngvinalhernieDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/IndgrebIngvinalhernieDHDB",
  "version" : "2.27.0",
  "name" : "IndgrebIngvinalhernieDHDB",
  "title" : "Indgreb - ingvinalhernie (DHDB)",
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
  "description" : "Indgreb - ingvinalhernie (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureType",
      "concept" : [{
        "code" : "laparoscopic",
        "display" : "Laparoskopisk"
      },
      {
        "code" : "lichtenstein",
        "display" : "Lichtenstein"
      },
      {
        "code" : "robot_laparoscopic",
        "display" : "Robot-assisteret laparoskopisk"
      },
      {
        "code" : "converted_open",
        "display" : "Laparoskopisk konverteret til åben"
      },
      {
        "code" : "open_mesh",
        "display" : "Anden åben mesh"
      },
      {
        "code" : "open",
        "display" : "Åben, uden mesh"
      },
      {
        "code" : "robot_converted_laparoscopic",
        "display" : "Robot-assisteret laparoskopisk konverteret til laparoskopisk"
      },
      {
        "code" : "robot_converted_open",
        "display" : "Robot-assisteret laparoskopisk konverteret til åben"
      },
      {
        "code" : "onstep",
        "display" : "Onstep"
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
