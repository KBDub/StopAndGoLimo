// TODO this is json for a different project, but the idea is the same, needs to be converted to php

private getDefaultColorPalette(): ColorPalette {
  return {
    primary: {
      dark: "hsl(210, 100%, 16%)",        // Main brand dark blue
      darkHex: "#002e54",
      hvac: "hsl(210, 89%, 25%)",         // Principle Plumbing brand blue
      hvacHex: "#054278",
      hyperBlue: "hsl(187, 100%, 37%)",   // Hyper blue
      hyperBlueHex: "#00a7bd",
      light:  "hsl(203, 92%, 75%)",       // Light brand blue
      lightHex: "#87cefa",
      darkest: "hsl(210, 100%, 11%)",     // Darkest blue
      darkestHex: "#001d36"
    },
    accent: {
      accent1: "hsl(19, 100%, 40%)",      // Orange accent 1
      accent1Hex: "#cc5600",
      accent2: "hsl(27, 100%, 48%)",      // Orange accent 2
      accent2Hex: "#f57200",
      accent3: "hsl(27, 100%, 67%)",      // Light orange
      accent3Hex: "#ffa556",
      accent4: "hsl(82, 60%, 55%)",       // Green accent
      accent4Hex: "#82d034",
      freeGreen: "hsl(90, 62.4%, 50.98%)", // Free Green
      freeGreenHex: "#82d034"
    },
    neutral: {
      offWhite: "hsl(0, 0%, 95%)",        // Off white
      offWhiteHex: "#f2f2f2",
      blueGray: "hsl(210, 7%, 56%)",      // Blue gray
      blueGrayHex: "#8a9198",
      textBlue: "hsl(206, 100%, 50%)",
      textBlueHex: "#3b82f6"
    }
  };
}

private getDefaultConfig(): SiteConfig {
  const colorPalette = this.getDefaultColorPalette();

  return {
    businessName: "Principle Plumbing",
    primaryColor: "#054278", //"#FFFFFF",
    secondaryColor: "#054278",
    colorPalette: colorPalette,
    tagline: "Exceptional Service, Exceptional Customer Satisfaction",
    phoneNumber: "(630) 346-1389",
    emergencyContactPhone: "(630) 346-1389",
    email: "contact@PrinciplePlumbing.com",
    address : {
      street: "1004 Wheaton Place",
      street2: "",
      city: "Wheaton",
      state: "Illinois",
      zip: "60187"
    },
    serviceAreas: ['Addison', 'Aurora', 'Bartlett', 'Bensenville', 'Bloomingdale', 'Bolingbrook', 'Burr Ridge', 'Carol Stream', 'Clarendon Hills', 'Darien', 'Downers Grove', 'Elk Grove Village', 'Elmhurst', 'Eola', 'Glen Ellyn', 'Glendale Heights', 'Hanover Park', 'Hinsdale', 'Itasca', 'Lisle', 'Lombard', 'Naperville', 'Oak Brook', 'Oakbrook Terrace', 'Roselle', 'Schaumburg', 'Villa Park', 'Warrenville', 'West Chicago', 'Westmont', 'Wheaton', 'Willowbrook', 'Winfield', 'Wood Dale', 'Woodridge'],
    priorityServiceAreas: ['Aurora', 'Bloomingdale', 'Carol Stream', 'Elmhurst', 'Glen Ellyn', 'Glendale Heights', 'Lisle', 'Lombard', 'Naperville', 'Oak Brook', 'Oakbrook Terrace', 'Warrenville', 'West Chicago', 'Wheaton'],
    serviceAreasDescription: "proudly serves DuPage County & the Chicagoland area",
    serviceAreaSlugs: [
      'we bring years of experience',
      'serving the DuPage County community',
      'licensed, insured, bonded, locally & family owned',
      'your neighbors and trusted local plumbing experts',
      'same-day service available for emergencies'
    ],
    serviceAreaNumSlugs: 5,
    yearIncorporated: 2011,
    //licenseNumber: "LN#4433322",
    licenseNumberDisplayOnBanner: false,
    emergencyContact: true,
    certifications: [''],
    associations: ['Illinois Pipe Trade Association', 'Plumbers Local 130 UA', 'West Suburban Association of Plumbing Contractors (WSA) ', 'Illinois Plumbing Education Assocation'],
    chamberAssociations: ['Wheaton', 'Glen Ellyn', 'Naperville', 'Lisle'],
    logo: {
      //url: "/assets/PP.Logo.6.new.png",
      url: "/assets/principle-plumbing-logo.png",
      alt: "Principle Plumbing, Inc. Logo",
      width: 300,
      height: 50
    },
    operatingHours: {
      "Monday": "6:00 AM - 9:30 PM",
      "Tuesday": "6:00 AM - 9:30 PM",
      "Wednesday": "6:00 AM - 9:30 PM",
      "Thursday": "6:00 AM - 9:30 PM",
      "Friday": "6:00 AM - 9:30 PM",
      "Saturday": "6:00 AM - 9:30 PM",
    },
    emergencyHours: {
      "Monday": "24 Hour",
      "Tuesday": "24 Hour",
      "Wednesday": "24 Hour",
      "Thursday": "24 Hour",
      "Friday": "24 Hour", 
      "Saturday": "24 Hour",
      "Sunday": "24 Hour"
    },

    specialties: ["Clogged Drains", "New Showers", "Sewar Rodding", "New Pipes", "New Shower Installation"],
    services: {
      "faucet-fix": { name: "Fix Broken Faucet", price: 165, duration: "45 min" },
      "drain-cleaning": { name: "Clean Clogged Drains", price: 95, duration: "90 min" },
      "sewer-repair": { name: "Fix Clogged Sewers", price: 295, duration: "120 min" },
      "faucet-install": { name: "Install a new Faucet", price: 265, duration: "30 min" }
    },
    emergencyServices: {
      "emergency-visit": { name: "Emergency Visit", price: 155, duration: "45 min" },
      "emergency-sump-pump-repair": { name: "Emergency Sump Pump Repair", price: 295, duration: "90 min" },
    },